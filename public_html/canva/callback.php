<?php
/**
 * Canva OAuth Callback Handler with PKCE
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/CanvaOAuth.php';
require_once __DIR__ . '/config.php';

session_start();

$config = require __DIR__ . '/config.php';

$error = $_GET['error'] ?? null;
$code = $_GET['code'] ?? null;
$state = $_GET['state'] ?? null;

echo "<h1>Canva OAuth Callback</h1>";

if ($error) {
    die('Canva Auth Error: ' . htmlspecialchars($_GET['error_description'] ?? $error));
}

if (!$code) {
    // Start OAuth flow with PKCE
    $oauth = new CanvaOAuth(
        $config['client_id'],
        $config['client_secret'],
        $config['redirect_uri']
    );
    
    $codeVerifier = $oauth->generateCodeVerifier();
    $stateToken = $oauth->generateState();
    
    $_SESSION['canva_code_verifier'] = $codeVerifier;
    $_SESSION['canva_oauth_state'] = $stateToken;
    
    $authUrl = $oauth->getAuthUrl($codeVerifier, $stateToken);
    
    echo "<p>Redirecting to Canva...</p>";
    echo "<p><a href='" . htmlspecialchars($authUrl) . "'>Click here if not redirected</a></p>";
    header('Location: ' . $authUrl);
    exit;
}

echo "<p>Received authorization code.</p>";

if (!isset($_SESSION['canva_oauth_state']) || $state !== $_SESSION['canva_oauth_state']) {
    die('Invalid state token - possible CSRF attack');
}

if (!isset($_SESSION['canva_code_verifier'])) {
    die('Missing code verifier - please start fresh');
}

$oauth = new CanvaOAuth(
    $config['client_id'],
    $config['client_secret'],
    $config['redirect_uri']
);

try {
    echo "<p>Exchanging code for token...</p>";
    $tokenData = $oauth->exchangeCodeForToken($code, $_SESSION['canva_code_verifier']);
    
    $tokens = [
        'access_token' => $tokenData['access_token'],
        'refresh_token' => $tokenData['refresh_token'] ?? null,
        'expires_at' => time() + $tokenData['expires_in'],
    ];
    
    file_put_contents(__DIR__ . '/tokens.json', json_encode($tokens, JSON_PRETTY_PRINT));
    
    unset($_SESSION['canva_code_verifier'], $_SESSION['canva_oauth_state']);
    
    echo '<h1>✅ Connected to Canva!</h1>';
    echo '<p>Access token received and saved.</p>';
    echo '<p><a href="test.php">Test connection →</a></p>';
    echo '<p><a href="sync.php">Sync images →</a></p>';
    
} catch (Exception $e) {
    echo '<p>❌ Error: ' . $e->getMessage() . '</p>';
}
