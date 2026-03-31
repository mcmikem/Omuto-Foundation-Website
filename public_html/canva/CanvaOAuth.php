<?php
/**
 * Canva OAuth 2.0 Authentication
 * Handles the OAuth flow to get access tokens
 */

class CanvaOAuth {
    private $clientId;
    private $clientSecret;
    private $redirectUri;
    private $scopes = ['folder:read', 'design:read', 'asset:read', 'export:read'];
    
    const AUTH_URL = 'https://www.canva.com/api/oauth/authorize';
    const TOKEN_URL = 'https://api.canva.com/rest/v1/oauth/token';
    
    public function __construct($clientId, $clientSecret, $redirectUri) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
    }
    
    public function getAuthUrl($state = null) {
        $params = [
            'response_type' => 'code',
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'scope' => implode(' ', $this->scopes),
        ];
        
        if ($state) {
            $params['state'] = $state;
        }
        
        return self::AUTH_URL . '?' . http_build_query($params);
    }
    
    public function exchangeCodeForToken($code) {
        $ch = curl_init();
        
        $data = [
            'grant_type' => 'authorization_code',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'code' => $code,
            'redirect_uri' => $this->redirectUri,
        ];
        
        curl_setopt($ch, CURLOPT_URL, self::TOKEN_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($httpCode !== 200) {
            throw new Exception('Token exchange failed: ' . $response);
        }
        
        return json_decode($response, true);
    }
    
    public function refreshToken($refreshToken) {
        $ch = curl_init();
        
        $data = [
            'grant_type' => 'refresh_token',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'refresh_token' => $refreshToken,
        ];
        
        curl_setopt($ch, CURLOPT_URL, self::TOKEN_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($httpCode !== 200) {
            throw new Exception('Token refresh failed: ' . $response);
        }
        
        return json_decode($response, true);
    }
}
