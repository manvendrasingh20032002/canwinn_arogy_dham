<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'canwinn_db');
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$sql = "CREATE TABLE IF NOT EXISTS enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100), 
    email VARCHAR(100), 
    phone VARCHAR(20), 
    course VARCHAR(100), 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Enrollments table created successfully\n";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "\n";
}
?>
