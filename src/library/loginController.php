<?php


echo $_POST['email'];
echo $_POST['pass'];

if (isset($_POST['email'])&&isset($_POST['pass'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $user = new User();
    $user->setEmail($email);
    $user->setPass($pass);
    $user->login();
}
