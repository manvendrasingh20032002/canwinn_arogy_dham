<?php
session_start();
require_once('../../includes/db.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = mysqli_real_escape_string($conn, $_POST['phone'] ?? '');

    if (!preg_match('/^[6-9]\d{9}$/', $phone)) {
        echo json_encode(['success' => false, 'message' => 'Invalid phone number.']);
        exit;
    }

    // Generate a 6-digit OTP
    // For development, we use 123456 as a fixed OTP or rand(100000, 999999)
    $otp = "123456"; // Default for testing
    // In production, uncomment below:
    // $otp = rand(100000, 999999); 

    $expires_at = date('Y-m-d H:i:s', strtotime('+10 minutes'));

    // Deactivate old OTPs for this phone
    mysqli_query($conn, "UPDATE otp_verifications SET status = 'expired' WHERE phone = '$phone' AND status = 'pending'");

    // Insert new OTP
    $sql = "INSERT INTO otp_verifications (phone, otp_code, expires_at) VALUES ('$phone', '$otp', '$expires_at')";
    
    if (mysqli_query($conn, $sql)) {
        // Here you would call your SMS API (Fast2SMS / Twilio)
        // For now, we simulate success
        echo json_encode([
            'success' => true, 
            'message' => 'OTP sent successfully!', 
            'debug_otp' => $otp // Remove in production
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error generating OTP.']);
    }
}
?>
