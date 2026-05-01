<?php
// Database connection file include karein
include_once('../includes/db.php');

// Check karein ki form submit hua hai ya nahi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Form se data receive karna aur security ke liye clean karna
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);

    // SQL Query data insert karne ke liye
    $sql = "INSERT INTO enrollments (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";
    
    if (mysqli_query($conn, $sql)) {
        // Agar success ho jaye toh alert dikhaye aur wapas bhej de
        echo "<script>
                alert('Success! Your enrollment for $course has been received.');
                window.location.href='../modules/others/rojgar_sewa.php';
              </script>";
    } else {
        // Agar table nahi hai toh error aayega, yahan table create karne ka hint dete hain
        echo "Error: " . mysqli_error($conn) . "<br>Please ensure 'enrollments' table exists.";
    }
} else {
    header("Location: ../modules/others/rojgar_sewa.php");
}
?>
