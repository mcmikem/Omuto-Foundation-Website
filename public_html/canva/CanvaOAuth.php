<?php
/**
 * Canva OAuth 2.0 with PKCE Authentication
 * Uses Proof Key for Code Exchange (PKCE) for secure OAuth
 */

class CanvaOAuth {
    private $clientId;
    private $clientSecret;
    private $redirectUri;
    private $scopes = ['folder:read', 'design:read', 'asset:read'];
    
    const AUTH_URL = 'https://www.canva.com/api/oauth/authorize';
    const TOKEN_URL = 'https://api.canva.com/rest/v1/oauth/token';
    
    public function __construct($clientId, $clientSecret, $redirectUri) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
    }
    
    public function generateCodeVerifier() {
        return rtrim(strtr(base64_encode(random_bytes(96)), '+/', '-_'), '=');
    }
    
    public function generateCodeChallenge($codeVerifier) {
        return rtrim(strtr(base64_encode(hash('sha256', $codeVerifier, true)), '+/', '-_'), '=');
    }
    
    public function generateState() {
        return rtrim(strtr(base64_encode(random_bytes(96)), '+/', '-_'), '=');
    }
    
    public function getAuthUrl($codeVerifier, $state) {
        $codeChallenge = $this->generateCodeChallenge($codeVerifier);
        
        $params = [
            'response_type' => 'code',
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'scope' => implode(' ', $this->scopes),
            'code_challenge' => $codeChallenge,
            'code_challenge_method' => 'S256',
            'state' => $state,
        ];
        
        return self::AUTH_URL . '?' . http_build_query($params);
    }
    
    public function exchangeCodeForToken($code, $codeVerifier) {
        $ch = curl_init();
        
        $credentials = base64_encode($this->clientId . ':' . $this->clientSecret);
        
        $postFields = http_build_query([
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $this->redirectUri,
            'code_verifier' => $codeVerifier,
        ]);
        
        curl_setopt($ch, CURLOPT_URL, self::TOKEN_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Basic ' . $credentials,
        ]);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($httpCode >= 400 || $error) {
            throw new Exception('Token exchange failed. HTTP: ' . $httpCode . '. Error: ' . $error . '. Response: ' . $response);
        }
        
        return json_decode($response, true);
    }
    
    public function refreshToken($refreshToken) {
        $ch = curl_init();
        
        $credentials = base64_encode($this->clientId . ':' . $this->clientSecret);
        
        $postFields = http_build_query([
            'grant_type' => 'refresh_token',
            'refresh_token' => $refreshToken,
        ]);
        
        curl_setopt($ch, CURLOPT_URL, self::TOKEN_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Basic ' . $credentials,
        ]);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if ($httpCode >= 400) {
            throw new Exception('Token refresh failed: ' . $httpCode . ' - ' . $response);
        }
        
        return json_decode($response, true);
    }
}
