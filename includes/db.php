<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "canwinn_db";
$port = 3306;

// Connection banana with timeout and explicit port
$conn = mysqli_init();
mysqli_options($conn, MYSQLI_OPT_CONNECT_TIMEOUT, 5);

if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, $port)) {
    die("Database Connection failed. Please check if MySQL is running in XAMPP. Error: " . mysqli_connect_error());
}
// Ab ye connection baaki files mein use hoga
?>