<?php
// Database connection file include karein
include_once('../includes/db.php');

// Check karein ki form button click hua hai ya nahi
if(isset($_POST['submit_feedback'])) {
    
    // Form se data receive karna aur security ke liye clean karna
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone'] ?? '');
    $rating = intval($_POST['rating']);
    $category = mysqli_real_escape_string($conn, $_POST['category'] ?? 'other');
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SQL Query data insert karne ke liye
    $sql = "INSERT INTO feedback (name, email, phone, category, rating, message, submitted_at) VALUES ('$name', '$email', '$phone', '$category', $rating, '$message', NOW())";
    
    if(mysqli_query($conn, $sql)) {
        // Success response
        echo "success";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Agar koi directly is page par aaye toh wapas bhej do
    header("Location: ../index.php");
}
?>
