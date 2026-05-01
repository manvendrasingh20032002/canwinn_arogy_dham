<?php
include_once('includes/db.php');

echo "Database Connection: SUCCESS\n";

$tables = ['contacts', 'members', 'appointments', 'feedback', 'enrollments'];
foreach ($tables as $table) {
    $result = mysqli_query($conn, "SHOW TABLES LIKE '$table'");
    if (mysqli_num_rows($result) > 0) {
        echo "Table '$table': EXISTS\n";
        $count = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM $table"))[0];
        echo " - Record Count: $count\n";
    } else {
        echo "Table '$table': MISSING\n";
    }
}
?>
