<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'canwinn_db');
$all_expected_cols = [
    'name' => 'VARCHAR(100)', 'guardian' => 'VARCHAR(100)', 'dob' => 'DATE', 
    'gender' => 'VARCHAR(20)', 'blood_group' => 'VARCHAR(10)', 'mobile' => 'VARCHAR(20)', 
    'alt_mobile' => 'VARCHAR(20)', 'email' => 'VARCHAR(100)', 'occupation' => 'VARCHAR(100)', 
    'address' => 'TEXT', 'city' => 'VARCHAR(50)', 'state' => 'VARCHAR(50)', 
    'pin_code' => 'VARCHAR(10)', 'id_proof_type' => 'VARCHAR(50)', 'id_proof_number' => 'VARCHAR(50)', 
    'emergency_name' => 'VARCHAR(100)', 'emergency_phone' => 'VARCHAR(20)', 
    'emergency_relation' => 'VARCHAR(50)', 'plan_type' => 'VARCHAR(50)', 
    'medical_history' => 'TEXT', 'photo_path' => 'VARCHAR(255)', 'ip_address' => 'VARCHAR(45)'
];
foreach($all_expected_cols as $col => $type) {
    $check = mysqli_query($conn, "SHOW COLUMNS FROM members LIKE '$col'");
    if (mysqli_num_rows($check) == 0) {
        mysqli_query($conn, "ALTER TABLE members ADD COLUMN $col $type");
        echo "Added $col\n";
    }
}
echo "Sync Complete";
?>
