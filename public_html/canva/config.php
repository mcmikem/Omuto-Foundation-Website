<?php
/**
 * Canva Integration Configuration
 * 
 * SETUP INSTRUCTIONS:
 * 1. Go to https://www.canva.dev/developers/
 * 2. Create a new app
 * 3. Add your domain to "Allowed redirect URIs"
 * 4. Copy your Client ID and Client Secret here
 */

return [
    // Get from Canva Developer Portal
    'client_id' => 'YOUR_CANVA_CLIENT_ID',
    'client_secret' => 'YOUR_CANVA_CLIENT_SECRET',
    
    // This must match what's set in Canva Developer Portal
    'redirect_uri' => 'https://omuto.org/canva/callback.php',
    
    // Your folder ID (from the URL: canva.com/folder/XXXXXXXX)
    'folder_id' => 'FAFJJJ9LTfM',
    
    // Where to save synced images
    'sync_dir' => __DIR__ . '/images',
    'cache_file' => __DIR__ . '/images/cache.json',
    
    // How long between syncs (in seconds)
    'cache_ttl' => 3600, // 1 hour
];
