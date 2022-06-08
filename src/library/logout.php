<?php
session_start();
session_destroy();
header("Location: http://127.0.0.1/php-employee-management-v1/index.php");
exit;
?>