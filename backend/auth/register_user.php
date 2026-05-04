<?php
session_start();
require_once('../../includes/db.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['pending_phone'])) {
    $phone = $_SESSION['pending_phone'];
    $name = mysqli_real_escape_string($conn, $_POST['name'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');

    if (empty($name)) {
        echo json_encode(['success' => false, 'message' => 'Name is required.']);
        exit;
    }

    $sql = "INSERT INTO users (name, phone, email, is_verified) VALUES ('$name', '$phone', '$email', 1)";
    
    if (mysqli_query($conn, $sql)) {
        $user_id = mysqli_insert_id($conn);
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $name;
        $_SESSION['user_phone'] = $phone;
        $_SESSION['role'] = 'user';
        
        unset($_SESSION['pending_phone']);
        
        echo json_encode(['success' => true, 'message' => 'Registration successful!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error saving profile: ' . mysqli_error($conn)]);
    }
}
?>
