<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>System Debug Mode</h1>";
echo "Checking Files...<br>";

$files = ['config/app.php', 'includes/db.php', 'includes/header.php'];

foreach ($files as $file) {
    if (file_exists($file)) {
        echo "✅ Found: $file <br>";
        try {
            include_once($file);
            echo "--- Loaded successfully.<br>";
        } catch (Exception $e) {
            echo "❌ Error loading $file: " . $e->getMessage() . "<br>";
        }
    } else {
        echo "❌ Missing: $file <br>";
    }
}

echo "<br><b>Database Test:</b><br>";
if (isset($conn)) {
    echo "✅ Database connection variable exists.<br>";
    if (mysqli_ping($conn)) {
        echo "✅ Database connection is ALIVE!<br>";
    } else {
        echo "❌ Database connection is DEAD: " . mysqli_error($conn) . "<br>";
    }
} else {
    echo "❌ Database variable ($conn) not found. Check includes/db.php<br>";
}

echo "<br>Debug Finished.";
?>
