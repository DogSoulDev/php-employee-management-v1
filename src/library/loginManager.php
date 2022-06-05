<?php
function checkLogin($username, $password) {
$userData=json_decode(file_get_contents("../../resources/users.json"), true);

$userDataName =$userData['users'][0]['name'];
$userDataPassword =$userData['users'][0]['password'];
if ($username === $userDataName && password_verify($password, $userDataPassword)){
    header ("location: ../dashboard.php");
} else {
    header ("location: ../../index.php?error");
}
echo "<pre>";
var_dump($userDataName, $userDataPassword);
echo "</pre>";
}



?>