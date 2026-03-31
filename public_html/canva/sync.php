<?php
/**
 * Sync Images from Canva to Local Server
 * Run this to download all images from your Canva folder
 */

require_once __DIR__ . '/CanvaClient.php';
require_once __DIR__ . '/CanvaOAuth.php';
require_once __DIR__ . '/config.php';

$config = require __DIR__ . '/config.php';

// Load tokens
$tokensFile = __DIR__ . '/tokens.json';
if (!file_exists($tokensFile)) {
    die("Not connected to Canva. <a href='callback.php'>Authorize first</a>");
}

$tokens = json_decode(file_get_contents($tokensFile), true);

// Refresh if needed
if ($tokens['expires_at'] < time()) {
    $oauth = new CanvaOAuth($config['client_id'], $config['client_secret'], $config['redirect_uri']);
    $newTokens = $oauth->refreshToken($tokens['refresh_token']);
    $tokens = [
        'access_token' => $newTokens['access_token'],
        'refresh_token' => $newTokens['refresh_token'] ?? $tokens['refresh_token'],
        'expires_at' => time() + $newTokens['expires_in'],
    ];
    file_put_contents($tokensFile, json_encode($tokens, JSON_PRETTY_PRINT));
}

// Initialize
$canva = new CanvaClient($config['client_id'], $config['client_secret'], $tokens['access_token']);
$canva->folderId = $config['folder_id'];

$sync = new CanvaImageSync($canva, $config['sync_dir'], $config['cache_file']);

echo "<h1>🔄 Syncing Images from Canva</h1>";

try {
    $images = $sync->syncImages(30);
    
    echo "<p>✅ Synced " . count($images) . " images!</p>";
    
    echo "<div style='display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:20px;'>";
    foreach ($images as $img) {
        $localPath = str_replace(__DIR__ . '/../', '', $img['local_path']);
        echo "<div style='border:1px solid #ddd;padding:10px;border-radius:8px;'>";
        echo "<img src='" . htmlspecialchars($localPath) . "' style='width:100%;height:150px;object-fit:cover;'>";
        echo "<p style='font-size:12px;margin:10px 0 0;'>" . htmlspecialchars($img['name']) . "</p>";
        echo "<code style='font-size:10px;display:block;word-break:break-all;'>$localPath</code>";
        echo "</div>";
    }
    echo "</div>";
    
    echo "<hr>";
    echo "<h3>📝 Image URLs for Website</h3>";
    echo "<p>Use these paths in your HTML:</p>";
    echo "<textarea style='width:100%;height:200px;font-family:monospace;font-size:12px;'>";
    foreach ($images as $img) {
        $localPath = str_replace(__DIR__ . '/../', '', $img['local_path']);
        echo "// " . htmlspecialchars($img['name']) . "\n";
        echo "'" . $localPath . "',\n\n";
    }
    echo "</textarea>";
    
} catch (Exception $e) {
    echo "<p>❌ Sync failed: " . $e->getMessage() . "</p>";
}
