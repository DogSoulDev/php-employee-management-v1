<?php
// require_once("./src/library/loginController.php");
// $alert = checkSession();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="./assets/js/index.js" defer></script>
    <script type="text/javascript" src="./assets/js/contactScript.js" defer></script>
    <link rel="stylesheet" href="./assets/css/loginStyle.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <title>Employee management</title>
</head>

<body class="text-center">
    <main class="form-signin form__container">
        <form action="./src/library/loginController.php" method="POST">
            <h1 class="h3 mb-3 font-weight-normal">Employee Access</h1>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label><input class="rememberME" type="checkbox" value="remember-me"> Remember me</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy;Assembler Institute Barcelona all rights reserved 2022</p>
            <a href="https://github.com/jose-cuevas">Jose Cuevas</a> &amp; <a
                href="https://github.com/DogSoulDev">Javier Fernández</a>
            <br>
            <a href="./contact.php">Contact</a>
        </form>
        <?php

?>
    </main>
</body>

</html>