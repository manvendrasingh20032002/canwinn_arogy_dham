<?php
require_once('../includes/db.php');

echo "<h2>Setting up User Profiling & OTP System...</h2>";

// 1. Create Users Table
$sql_users = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    phone VARCHAR(15) UNIQUE NOT NULL,
    email VARCHAR(100),
    role ENUM('user', 'admin') DEFAULT 'user',
    is_verified TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql_users)) {
    echo "✅ Users table ready.<br>";
} else {
    echo "❌ Error creating users table: " . mysqli_error($conn) . "<br>";
}

// 2. Create OTP Verifications Table
$sql_otp = "CREATE TABLE IF NOT EXISTS otp_verifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone VARCHAR(15) NOT NULL,
    otp_code VARCHAR(6) NOT NULL,
    expires_at DATETIME NOT NULL,
    status ENUM('pending', 'verified', 'expired') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql_otp)) {
    echo "✅ OTP table ready.<br>";
} else {
    echo "❌ Error creating OTP table: " . mysqli_error($conn) . "<br>";
}

// 3. Update Appointments Table to include user_id if not exists
$check_column = mysqli_query($conn, "SHOW COLUMNS FROM appointments LIKE 'user_id'");
if (mysqli_num_rows($check_column) == 0) {
    $sql_update_apt = "ALTER TABLE appointments ADD COLUMN user_id INT AFTER id";
    if (mysqli_query($conn, $sql_update_apt)) {
        echo "✅ Appointments table updated with user_id.<br>";
    } else {
        echo "❌ Error updating appointments table: " . mysqli_error($conn) . "<br>";
    }
} else {
    echo "ℹ️ user_id column already exists in appointments.<br>";
}

echo "<br><strong>Setup Complete! You can now delete this file for security.</strong>";
?>
