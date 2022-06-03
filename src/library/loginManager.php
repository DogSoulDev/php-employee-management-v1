<?php
session_start();

function authUser(){
    // Start session
    // session_start();
    
    // get $_POST variablesfrom the form
        $email = $_POST['email'];
        $password = $_POST['password'];     
    
        // Validate if user is in our fake data base and redirect the user
        if (checkUser($email, $password)){
            $_SESSION['email'] = $email;   
            header("Location:../dashboard.php");
        }else{
            $_SESSION['loginError'] = "Wrong email or password";
            header("Location:../dashboard.php");        
        }
    };
    
    // Validate user in our fake data base and redirect
    function checkUser($email, $password){    
        // "Fake" Data Base
        $emailDb = "admin@assemblerschool.com";
        $passwordDb = "123456";    
    
        // Encrypt the password (in a database passwords always encripted)
        $passwordEnc = password_hash($passwordDb, PASSWORD_DEFAULT);
    
        if ($email === $emailDb && password_verify($password, $passwordEnc)) return true;
        else return false;
    };

    
?>
