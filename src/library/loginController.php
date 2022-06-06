<?php
require './loginManager.php';

// checkLogin($_POST['username'], $_POST['password']);

echo "<pre>";
print_r($_SERVER);
echo "</pre>";


if($_SERVER['REQUEST_METHOD'] == "POST") {
    checkLogin($_POST['username'], $_POST['password']);
}else if($_SERVER['QUERY_STRING'] == "logout"){
    // logout();
    unset($_SESSION);
    header("location: ../../index.php");
}

?>