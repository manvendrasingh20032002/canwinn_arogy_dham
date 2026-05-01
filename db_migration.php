<?php
include_once('includes/db.php');

$sql = "CREATE TABLE IF NOT EXISTS `enrollments` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `course` VARCHAR(100) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

if (mysqli_query($conn, $sql)) {
    echo "<h2 style='color:green;'>Success! 'enrollments' table has been created successfully.</h2>";
    echo "<p>You can now close this page and delete this file (db_migration.php) for security.</p>";
    echo "<a href='index.php'>Go to Home</a>";
} else {
    echo "<h2 style='color:red;'>Error creating table: " . mysqli_error($conn) . "</h2>";
}
?>
