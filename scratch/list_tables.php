<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'canwinn_db');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$res = mysqli_query($conn, 'SHOW TABLES');
if (!$res) {
    die("Query failed: " . mysqli_error($conn));
}
while ($row = mysqli_fetch_row($res)) {
    echo $row[0] . PHP_EOL;
}
?>
