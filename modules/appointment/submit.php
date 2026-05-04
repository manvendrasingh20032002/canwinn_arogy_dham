<?php
// Include database connection
require_once('../../includes/db.php');
require_once('../../config/app.php');

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input data
    $patient_name = mysqli_real_escape_string($conn, trim($_POST['patient_name'] ?? ''));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone'] ?? ''));
    $email = mysqli_real_escape_string($conn, trim($_POST['email'] ?? ''));
    $age = mysqli_real_escape_string($conn, trim($_POST['age'] ?? ''));
    $gender = mysqli_real_escape_string($conn, trim($_POST['gender'] ?? ''));
    $blood_group = mysqli_real_escape_string($conn, trim($_POST['blood_group'] ?? ''));
    $speciality = mysqli_real_escape_string($conn, trim($_POST['speciality'] ?? ''));
    $doctor_name = mysqli_real_escape_string($conn, trim($_POST['doctor_name'] ?? ''));
    $appointment_date = mysqli_real_escape_string($conn, trim($_POST['appointment_date'] ?? ''));
    $appointment_time = mysqli_real_escape_string($conn, trim($_POST['appointment_time'] ?? ''));
    $appointment_type = mysqli_real_escape_string($conn, trim($_POST['appointment_type'] ?? ''));
    $polyclinic = mysqli_real_escape_string($conn, trim($_POST['polyclinic'] ?? ''));
    $symptoms = mysqli_real_escape_string($conn, trim($_POST['symptoms'] ?? ''));
    $medical_history = mysqli_real_escape_string($conn, trim($_POST['medical_history'] ?? ''));
    $emergency_contact = mysqli_real_escape_string($conn, trim($_POST['emergency_contact'] ?? ''));
    $emergency_phone = mysqli_real_escape_string($conn, trim($_POST['emergency_phone'] ?? ''));
    $terms = isset($_POST['terms']) ? 'Yes' : 'No';

    // Basic validation
    $errors = [];

    if (empty($patient_name)) $errors[] = "Patient name is required";
    if (empty($phone)) $errors[] = "Phone number is required";
    if (empty($age)) $errors[] = "Age is required";
    if (empty($gender)) $errors[] = "Gender is required";
    if (empty($speciality)) $errors[] = "Medical speciality is required";
    if (empty($appointment_date)) $errors[] = "Appointment date is required";
    if (empty($appointment_time)) $errors[] = "Appointment time is required";
    if (empty($appointment_type)) $errors[] = "Appointment type is required";
    if (empty($polyclinic)) $errors[] = "Polyclinic selection is required";
    if (empty($symptoms)) $errors[] = "Symptoms/reason is required";
    if ($terms !== 'Yes') $errors[] = "You must agree to terms and conditions";

    // Validate date is not in the past
    if (!empty($appointment_date)) {
        $selected_date = strtotime($appointment_date);
        $today = strtotime(date('Y-m-d'));
        if ($selected_date < $today) {
            $errors[] = "Appointment date cannot be in the past";
        }
    }

    // Validate phone number format (basic)
    if (!empty($phone) && !preg_match('/^[6-9]\d{9}$/', $phone)) {
        $errors[] = "Please enter a valid 10-digit phone number";
    }

    // If there are validation errors, redirect back with error
    if (!empty($errors)) {
        $error_message = urlencode(implode(', ', $errors));
        header("Location: " . BASE_URL . "modules/appointment/book.php?status=error&message=" . $error_message);
        exit();
    }

    // Generate appointment ID
    $appointment_id = 'APT' . date('Ymd') . rand(1000, 9999);
    $ip_address = $_SERVER['REMOTE_ADDR'] ?? 'unknown';

    // SQL Query to insert into appointments table
    $user_id = $_SESSION['user_id'] ?? 0;
    $sql = "INSERT INTO appointments (
        user_id, appointment_id, patient_name, phone, email, age, gender, blood_group, 
        speciality, doctor_name, appointment_date, appointment_time, 
        appointment_type, polyclinic, symptoms, medical_history, 
        emergency_contact, emergency_phone, terms_agreed, ip_address
    ) VALUES (
        '$user_id', '$appointment_id', '$patient_name', '$phone', '$email', '$age', '$gender', '$blood_group', 
        '$speciality', '$doctor_name', '$appointment_date', '$appointment_time', 
        '$appointment_type', '$polyclinic', '$symptoms', '$medical_history', 
        '$emergency_contact', '$emergency_phone', '$terms', '$ip_address'
    )";


    if (mysqli_query($conn, $sql)) {
        // Success response
        header("Location: " . BASE_URL . "modules/appointment/book.php?status=success&appointment_id=" . $appointment_id);
        exit();
    } else {
        // Error writing to database
        $db_error = mysqli_error($conn);
        header("Location: " . BASE_URL . "modules/appointment/book.php?status=error&message=" . urlencode("Database Error: " . $db_error));
        exit();
    }
} else {
    // If not POST request, redirect to booking page
    header("Location: " . BASE_URL . "modules/appointment/book.php");
    exit();
}
?>
?>