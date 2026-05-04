<?php
session_start();
require_once('../../includes/db.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = mysqli_real_escape_string($conn, $_POST['phone'] ?? '');
    $otp = mysqli_real_escape_string($conn, $_POST['otp'] ?? '');

    // Check if OTP matches and is not expired
    $sql = "SELECT * FROM otp_verifications 
            WHERE phone = '$phone' 
            AND otp_code = '$otp' 
            AND status = 'pending' 
            AND expires_at > NOW() 
            ORDER BY id DESC LIMIT 1";
    
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        // Mark OTP as verified
        mysqli_query($conn, "UPDATE otp_verifications SET status = 'verified' WHERE id = " . $row['id']);

        // Check if user already exists
        $user_check = mysqli_query($conn, "SELECT * FROM users WHERE phone = '$phone'");
        if ($user = mysqli_fetch_assoc($user_check)) {
            // Existing user
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_phone'] = $user['phone'];
            $_SESSION['role'] = $user['role'];
            
            echo json_encode(['success' => true, 'is_new_user' => false, 'message' => 'Login successful!']);
        } else {
            // New user - need to register name/email
            $_SESSION['pending_phone'] = $phone;
            echo json_encode(['success' => true, 'is_new_user' => true, 'message' => 'OTP verified. Please complete your profile.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid or expired OTP.']);
    }
}
?>
