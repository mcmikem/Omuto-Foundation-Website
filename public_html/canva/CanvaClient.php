<?php
/**
 * Canva Connect API Integration
 * Fetches images from a Canva folder for website use
 */

class CanvaClient {
    private $clientId;
    private $clientSecret;
    private $accessToken;
    private $folderId = 'FAFJJJ9LTfM'; // User's folder
    
    const API_BASE = 'https://api.canva.com/rest/v1';
    
    public function __construct($clientId, $clientSecret, $accessToken = null) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->accessToken = $accessToken;
    }
    
    public function setAccessToken($token) {
        $this->accessToken = $token;
    }
    
    public function getFolderItems($itemTypes = ['image'], $limit = 50) {
        $url = self::API_BASE . '/folders/' . $this->folderId . '/items';
        $params = [
            'item_types' => implode(',', $itemTypes),
            'limit' => $limit,
            'sort_by' => 'modified_descending'
        ];
        
        $response = $this->request('GET', $url . '?' . http_build_query($params));
        return $response;
    }
    
    public function getImageUrls($maxImages = 20) {
        $items = $this->getFolderItems(['image'], $maxImages);
        
        if (!isset($items->items)) {
            return [];
        }
        
        $images = [];
        foreach ($items->items as $item) {
            if ($item->type === 'image' && isset($item->image->thumbnail->url)) {
                $images[] = [
                    'name' => $item->image->name,
                    'id' => $item->image->id,
                    'thumbnail_url' => $item->image->thumbnail->url,
                    'created_at' => $item->image->created_at
                ];
            }
        }
        
        return $images;
    }
    
    public function getDesigns($limit = 20) {
        $items = $this->getFolderItems(['design'], $limit);
        
        if (!isset($items->items)) {
            return [];
        }
        
        $designs = [];
        foreach ($items->items as $item) {
            if ($item->type === 'design' && isset($item->design->thumbnail->url)) {
                $designs[] = [
                    'title' => $item->design->title,
                    'id' => $item->design->id,
                    'thumbnail_url' => $item->design->thumbnail->url,
                    'view_url' => $item->design->urls->view_url ?? null,
                    'created_at' => $item->design->created_at
                ];
            }
        }
        
        return $designs;
    }
    
    private function request($method, $url, $data = null) {
        $ch = curl_init();
        
        $headers = [
            'Authorization: Bearer ' . $this->accessToken,
            'Content-Type: application/json'
        ];
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
            if ($data) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            }
        }
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($httpCode >= 400) {
            throw new Exception('Canva API error: ' . $httpCode . ' - ' . $response);
        }
        
        return json_decode($response);
    }
}

/**
 * Sync images from Canva to local server
 */
class CanvaImageSync {
    private $canva;
    private $saveDir;
    private $cacheFile;
    
    public function __construct(CanvaClient $canva, $saveDir, $cacheFile) {
        $this->canva = $canva;
        $this->saveDir = $saveDir;
        $this->cacheFile = $cacheFile;
    }
    
    public function syncImages($maxImages = 20) {
        if (!is_dir($this->saveDir)) {
            mkdir($this->saveDir, 0755, true);
        }
        
        $images = $this->canva->getImageUrls($maxImages);
        $cached = $this->getCachedUrls();
        $newImages = [];
        
        foreach ($images as $img) {
            // Check if already cached
            if (isset($cached[$img['id']])) {
                $newImages[] = array_merge($img, ['local_path' => $cached[$img['id']]]);
                continue;
            }
            
            // Download new image
            $filename = $this->sanitizeFilename($img['name']) . '_' . $img['id'] . '.jpg';
            $localPath = $this->saveDir . '/' . $filename;
            
            if ($this->downloadImage($img['thumbnail_url'], $localPath)) {
                $cached[$img['id']] = $localPath;
                $newImages[] = array_merge($img, ['local_path' => $localPath]);
            }
        }
        
        // Save cache
        file_put_contents($this->cacheFile, json_encode($cached, JSON_PRETTY_PRINT));
        
        return $newImages;
    }
    
    private function downloadImage($url, $path) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        
        $data = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($httpCode === 200 && $data) {
            return file_put_contents($path, $data) !== false;
        }
        
        return false;
    }
    
    private function sanitizeFilename($name) {
        $name = preg_replace('/[^a-zA-Z0-9_-]/', '_', $name);
        return substr($name, 0, 50);
    }
    
    private function getCachedUrls() {
        if (file_exists($this->cacheFile)) {
            return json_decode(file_get_contents($this->cacheFile), true) ?? [];
        }
        return [];
    }
}
