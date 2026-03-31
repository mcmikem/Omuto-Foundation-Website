<?php
/**
 * Test Canva Integration & Sync Images
 * Run this to verify connection and sync images
 */

require_once __DIR__ . '/CanvaClient.php';
require_once __DIR__ . '/CanvaOAuth.php';
require_once __DIR__ . '/config.php';

$config = require __DIR__ . '/config.php';

echo "<h1>Canva Integration Test</h1>";

// Check if tokens exist
$tokensFile = __DIR__ . '/tokens.json';
if (!file_exists($tokensFile)) {
    echo "<p>❌ Not connected to Canva yet.</p>";
    echo "<p><a href='callback.php'>Click here to authorize →</a></p>";
    exit;
}

$tokens = json_decode(file_get_contents($tokensFile), true);

// Check if token expired
if ($tokens['expires_at'] < time()) {
    echo "<p>🔄 Token expired, refreshing...</p>";
    
    $oauth = new CanvaOAuth(
        $config['client_id'],
        $config['client_secret'],
        $config['redirect_uri']
    );
    
    try {
        $newTokens = $oauth->refreshToken($tokens['refresh_token']);
        $tokens = [
            'access_token' => $newTokens['access_token'],
            'refresh_token' => $newTokens['refresh_token'] ?? $tokens['refresh_token'],
            'expires_at' => time() + $newTokens['expires_in'],
        ];
        file_put_contents($tokensFile, json_encode($tokens, JSON_PRETTY_PRINT));
        echo "<p>✅ Token refreshed!</p>";
    } catch (Exception $e) {
        echo "<p>❌ Token refresh failed: " . $e->getMessage() . "</p>";
        echo "<p><a href='callback.php'>Re-authorize →</a></p>";
        exit;
    }
}

echo "<p>✅ Connected to Canva!</p>";
echo "<p>Access token: " . substr($tokens['access_token'], 0, 20) . "...</p>";

// Test API connection
$canva = new CanvaClient($config['client_id'], $config['client_secret'], $tokens['access_token']);
$canva->folderId = $config['folder_id'];

echo "<hr>";
echo "<h2>📁 Fetching Images from Folder...</h2>";

try {
    $images = $canva->getImageUrls(20);
    
    echo "<p>Found " . count($images) . " images</p>";
    
    if (empty($images)) {
        echo "<p>⚠️ No images found in folder. Make sure your folder has uploaded images.</p>";
    } else {
        echo "<div style='display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:20px;'>";
        foreach ($images as $img) {
            echo "<div style='border:1px solid #ddd;padding:10px;border-radius:8px;'>";
            echo "<img src='" . htmlspecialchars($img['thumbnail_url']) . "' style='width:100%;height:150px;object-fit:cover;'>";
            echo "<p style='font-size:12px;margin:10px 0 0;'>" . htmlspecialchars($img['name']) . "</p>";
            echo "</div>";
        }
        echo "</div>";
    }
    
} catch (Exception $e) {
    echo "<p>❌ Error fetching images: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<h2>🎨 Fetching Designs...</h2>";

try {
    $designs = $canva->getDesigns(10);
    
    echo "<p>Found " . count($designs) . " designs</p>";
    
    if (!empty($designs)) {
        echo "<div style='display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:20px;'>";
        foreach ($designs as $design) {
            echo "<div style='border:1px solid #ddd;padding:10px;border-radius:8px;'>";
            echo "<img src='" . htmlspecialchars($design['thumbnail_url']) . "' style='width:100%;height:150px;object-fit:cover;'>";
            echo "<p style='font-size:12px;margin:10px 0 0;'>" . htmlspecialchars($design['title']) . "</p>";
            echo "<a href='" . htmlspecialchars($design['view_url']) . "' target='_blank' style='font-size:11px;'>View in Canva →</a>";
            echo "</div>";
        }
        echo "</div>";
    }
    
} catch (Exception $e) {
    echo "<p>❌ Error fetching designs: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<h2>🔄 Sync to Server</h2>";
echo "<p><a href='sync.php' style='background:#d62020;color:#fff;padding:12px 24px;text-decoration:none;border-radius:6px;'>Click here to download images →</a></p>";
