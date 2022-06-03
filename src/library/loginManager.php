<?php
    $usersJson = file_get_contents(__DIR__."/../../resources/users.json");
    $usersArray = json_decode($usersJson, true);

    foreach ($usersArray['users'] as $user) {
        $isValidUser = $user['email'] === $_POST['email'];
        $isPasswordChecked = password_verify($_POST['password'], $user['password']);

        if ($isValidUser && $isPasswordChecked) {

            setcookie("userId", $user["userId"], time() + 84600, '/');
            header("Location: http://localhost:8000/src/dashboard.php", true, 302);

            exit();
        }
    }
    
    header("Location: http://localhost:8000/assets/html/unauthorized.html", true, 302);

    exit();
?>