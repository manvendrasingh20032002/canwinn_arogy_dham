<?php
// Database connection include karein
require_once('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/members.php');
    exit;
}

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
    // MySQL security ke liye data escape karein
    $data[$field] = mysqli_real_escape_string($conn, trim($_POST[$field] ?? ''));
}

$uploadPath = '';
if (!empty($_FILES['photo']['name']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = __DIR__ . '/../uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    $filename = time() . '-' . preg_replace('/[^A-Za-z0-9._-]/', '', basename($_FILES['photo']['name']));
    $uploadPath = $uploadDir . $filename;
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath)) {
        $data['photo_path'] = 'uploads/' . $filename;
    } else {
        $data['photo_path'] = '';
    }
} else {
    $data['photo_path'] = '';
}

$ip_address = mysqli_real_escape_string($conn, $_SERVER['REMOTE_ADDR'] ?? 'unknown');
$photo_path = mysqli_real_escape_string($conn, $data['photo_path']);

// SQL Query banana (Harr field ko properly match karein)
$columns = implode(", ", array_keys($data));
$values = "'" . implode("', '", array_values($data)) . "'";

$sql = "INSERT INTO members ($columns, ip_address) VALUES ($values, '$ip_address')";

if (mysqli_query($conn, $sql)) {
    // Success redirect
    header('Location: ../pages/members.php?status=success');
} else {
    // Error handling
    die("Error saving to database: " . mysqli_error($conn));
}
exit;
?>
