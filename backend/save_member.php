<?php
// Database connection include karein
require_once('../includes/db.php');

// Enable error reporting for debugging on live (will be caught by die or redirect)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/members.php');
    exit;
}

// All possible fields from the form and DB
$fields = [
    'name',
    'guardian',
    'dob',
    'gender',
    'blood_group',
    'mobile',
    'alt_mobile',
    'email',
    'occupation',
    'address',
    'city',
    'state',
    'pin_code',
    'id_proof_type',
    'id_proof_number',
    'emergency_name',
    'emergency_phone',
    'emergency_relation',
    'plan_type',
    'medical_history'
];

$data = [];
foreach ($fields as $field) {
    // Data sanitize karein aur missing fields handle karein
    $data[$field] = mysqli_real_escape_string($conn, trim($_POST[$field] ?? ''));
}

// Basic validation
if (empty($data['name']) || empty($data['mobile'])) {
    header('Location: ../pages/members.php?status=error&message=' . urlencode('Name and Mobile are required.'));
    exit;
}

// Photo upload handling
$uploadPath = '';
if (!empty($_FILES['photo']['name']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = __DIR__ . '/../uploads/';
    
    // Ensure directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    
    $filename = time() . '-' . preg_replace('/[^A-Za-z0-9._-]/', '', basename($_FILES['photo']['name']));
    $targetFile = $uploadDir . $filename;
    
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
        $data['photo_path'] = 'uploads/' . $filename;
    } else {
        $data['photo_path'] = '';
    }
} else {
    $data['photo_path'] = '';
}

$ip_address = mysqli_real_escape_string($conn, $_SERVER['REMOTE_ADDR'] ?? 'unknown');

// SQL Query formation
$columns = implode(", ", array_keys($data));
$values = "'" . implode("', '", array_values($data)) . "'";

$sql = "INSERT INTO members ($columns, ip_address) VALUES ($values, '$ip_address')";

if (mysqli_query($conn, $sql)) {
    // Success - Redirect back to form or a success page
    header('Location: ../pages/members.php?status=success');
    exit;
} else {
    // Error saving to database
    $errorMsg = mysqli_error($conn);
    header('Location: ../pages/members.php?status=error&message=' . urlencode('Database Error: ' . $errorMsg));
    exit;
}
?>

