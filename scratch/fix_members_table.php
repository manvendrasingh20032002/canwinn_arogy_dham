<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'canwinn_db');
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$cols = [
    'occupation' => 'VARCHAR(100)',
    'id_proof_type' => 'VARCHAR(50)',
    'id_proof_number' => 'VARCHAR(50)',
    'emergency_name' => 'VARCHAR(100)',
    'emergency_phone' => 'VARCHAR(20)',
    'emergency_relation' => 'VARCHAR(50)',
    'medical_history' => 'TEXT'
];

foreach($cols as $col => $type) {
    $check = mysqli_query($conn, "SHOW COLUMNS FROM members LIKE '$col'");
    if (mysqli_num_rows($check) == 0) {
        if (mysqli_query($conn, "ALTER TABLE members ADD COLUMN $col $type")) {
            echo "Added $col\n";
        } else {
            echo "Error adding $col: " . mysqli_error($conn) . "\n";
        }
    } else {
        echo "$col already exists\n";
    }
}
?>
