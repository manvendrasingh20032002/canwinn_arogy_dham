<?php
$content = file_get_contents('canwinn_db.sql');
$lines = explode("\n", $content);
$clean_lines = [];

foreach ($lines as $line) {
    if (stripos($line, 'CREATE DATABASE') === false && stripos($line, 'USE ') === false) {
        $clean_lines[] = $line;
    }
}

file_put_contents('canwinn_db_live.sql', implode("\n", $clean_lines));
echo "canwinn_db_live.sql created successfully without CREATE/USE statements.\n";
?>
