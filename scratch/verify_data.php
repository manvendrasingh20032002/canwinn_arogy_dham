<?php
require_once('../includes/db.php');

echo "--- MEMBERS ---\n";
$res = mysqli_query($conn, "SELECT id, name, mobile, city FROM members ORDER BY id DESC");
while($row = mysqli_fetch_assoc($res)) {
    print_r($row);
}

echo "\n--- APPOINTMENTS ---\n";
$res = mysqli_query($conn, "SELECT id, patient_name, phone, appointment_date FROM appointments ORDER BY id DESC");
while($row = mysqli_fetch_assoc($res)) {
    print_r($row);
}
?>
