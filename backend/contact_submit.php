<?php
// Database connection file include karein
include_once('../includes/db.php');

// Check karein ki form button click hua hai ya nahi
if(isset($_POST['submit_contact'])) {
    
    // Form se data receive karna aur security ke liye clean karna
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SQL Query data insert karne ke liye
    $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    
    if(mysqli_query($conn, $sql)) {
        // Agar success ho jaye toh alert dikhaye aur home par bhej de
        echo "<script>
                alert('Thank you! Your message has been sent successfully.');
                window.location.href='../index.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Agar koi directly is page par aaye toh wapas bhej do
    header("Location: ../index.php");
}
?>