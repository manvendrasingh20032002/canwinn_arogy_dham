<?php
// Smart Database Connection (Local & Live)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') {
    // LOCAL SETTINGS (XAMPP)
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "canwinn_db";
    $port = 3306;
} else {
    // LIVE SETTINGS (InfinityFree)
    $servername = "sql207.infinityfree.com";
    $username = "if0_41803888";
    $password = "jvrTs97Cq9P8";
    $dbname = "if0_41803888_canwinn_db";
    $port = 3306;
}

// Connection banana
$conn = mysqli_init();
mysqli_options($conn, MYSQLI_OPT_CONNECT_TIMEOUT, 5);

if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, $port)) {
    die("Database Connection failed: " . mysqli_connect_error());
}
?>