<?php
require('./src/library/loginManager.php');

checkUrl($_GET);
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
    <script type="text/javascript" src="./assets/js/contactScript.js" def></script>
    <link rel="stylesheet" href="./assets/css/loginStyle.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    <title>Employee management</title>
</head>

<body class="text-center">
    <main class="form-signin form__container">
        <div class="container">
            <img class="onepunch" src="./assets/img/v_50.png">
            <section>
                <p class="log-in">Employee Management</p>
                <form action="./src/library/loginController.php" method="POST">
                    <div class="input-container">
                        <input name="username" type="text" placeholder="Username" required>
                    </div>
                    <div class="input-container">
                        <input name="password" type="password" placeholder="Password" required>
                    </div>
                    <div class="input-container-flex">
                        <p class="remember-label">Remember me</p>
                        <input type="checkbox" type="radio" value=&#10004 class="check-box is-not-checked">
                    </div>
                    <div class="input-container">
                        <button type="submit" class="login-btn">Log in</button>
                    </div>
                </form>
</section>
        </div>
        <div class="footer">
            <div class="footer-container">
                <div class="footer-text">
                    <p class="copy">&copy;Assembler Institute Barcelona all rights reserved 2022</p>
                    <a href="https://github.com/jose-cuevas">Jose Cuevas</a> &amp; <a
                        href="https://github.com/DogSoulDev">Javier Fernández</a>
                    <br>
                    <a class="lastContact"  href="./contact.php">Contact</a>
                </div>
            </div>
            </form>

            <?php

?>
    </main>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>