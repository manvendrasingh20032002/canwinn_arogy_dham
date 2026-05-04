<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Smart BASE_URL detection (Local vs InfinityFree)

// Smart BASE_URL detection (Local vs InfinityFree)
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') {
    define('BASE_URL', 'http://localhost/canwinn_project/');
} else {
    // Robust protocol detection for Live Server (Cloudflare/InfinityFree compatible)
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || 
                (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') 
                ? "https" : "http";
    
    // Ensure trailing slash
    $host = rtrim($_SERVER['HTTP_HOST'], '/');
    define('BASE_URL', $protocol . "://" . $host . "/");
}

?>