<?php
session_start();

function checkLogin($username, $password) {
$userData=json_decode(file_get_contents("../../resources/users.json"), true);

$userDataName =$userData['users'][0]['name'];
$userDataPassword =$userData['users'][0]['password'];
if ($username === $userDataName && password_verify($password, $userDataPassword)){
    $_SESSION['username'];
    header ("location: ../dashboard.php");
} else {
    header ("location: ../../index.php?error");
}
// echo "<pre>";
// var_dump($userDataName, $userDataPassword);
// echo "</pre>";
}

function checkUrl ($get){
    if(isset($get['error'])){
        echo "<script>alert('Please try again later ');</script>";
    }
}

?>