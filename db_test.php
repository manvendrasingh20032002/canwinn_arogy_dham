<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "canwinn_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully to " . $dbname;
mysqli_close($conn);
?>
