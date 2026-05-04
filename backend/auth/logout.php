<?php
session_start();
require_once('../../config/app.php');
session_destroy();
header("Location: " . BASE_URL . "pages/login.php");
exit;
?>
