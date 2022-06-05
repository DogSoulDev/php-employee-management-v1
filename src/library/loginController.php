<?php
require './loginManager.php';

checkLogin($_POST['username'], $_POST['password']);

echo "<pre>";
print_r($_POST['username']);
echo "</pre>";

?>