<?php
/**
 * Canva OAuth Callback Handler
 * Handles the OAuth redirect and stores tokens
 */

require_once __DIR__ . '/CanvaOAuth.php';
require_once __DIR__ . '/config.php';

$config = require __DIR__ . '/config.php';

session_start();

$error = $_GET['error'] ?? null;
$code = $_GET['code'] ?? null;
$state = $_GET['state'] ?? null;

// Check for errors
if ($error) {
    die('Canva Auth Error: ' . htmlspecialchars($_GET['error_description'] ?? $error));
}

if (!$code) {
    // Start OAuth flow
    $oauth = new CanvaOAuth(
        $config['client_id'],
        $config['client_secret'],
        $config['redirect_uri']
    );
    
    // Generate state token for security
    $stateToken = bin2hex(random_bytes(32));
    $_SESSION['canva_oauth_state'] = $stateToken;
    
    $authUrl = $oauth->getAuthUrl($stateToken);
    
    header('Location: ' . $authUrl);
    exit;
}

// Verify state token
if (!isset($_SESSION['canva_oauth_state']) || $_GET['state'] !== $_SESSION['canva_oauth_state']) {
    die('Invalid state token - possible CSRF attack');
}

// Exchange code for token
$oauth = new CanvaOAuth(
    $config['client_id'],
    $config['client_secret'],
    $config['redirect_uri']
);

try {
    $tokenData = $oauth->exchangeCodeForToken($_GET['code']);
    
    // Save tokens (in production, use encrypted storage or database)
    $tokens = [
        'access_token' => $tokenData['access_token'],
        'refresh_token' => $tokenData['refresh_token'] ?? null,
        'expires_at' => time() + $tokenData['expires_in'],
    ];
    
    file_put_contents(__DIR__ . '/tokens.json', json_encode($tokens, JSON_PRETTY_PRINT));
    
    echo '<h1>✅ Connected to Canva!</h1>';
    echo '<p>Your Canva account is now linked. You can close this window.</p>';
    echo '<p><a href="test.php">View synced images →</a></p>';
    
} catch (Exception $e) {
    die('Token exchange failed: ' . $e->getMessage());
}
