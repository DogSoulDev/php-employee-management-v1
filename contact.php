<?php
session_start();

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
    <script type="text/javascript" src="./assets/js/index.js" type="module"></script>
    
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    <title>Contact</title>

</head>

<div class="contact-container">
    <div class="left-col">
        <img class="logo" src="./assets/img/asse.webp" />
    </div>
    <div class="right-col">
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
            </label>
        </div>

        <h1 class="contact-title">Contact us</h1>
        <p>If you have questions or any problems with our program, please contact us, we will attend to you as soon as
            possible. Dev Team .</p>

        <form id="contact-form" method="post">
            <label for="name">Full name</label>
            <input type="text" id="name" name="name" placeholder="Your Full Name" required>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Your Email Address" required>
            <label for="message">Message</label>
            <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
            <button class="sendBtn" type="submit" id="submit" name="submit">Send</button>
            <!--</a>-->
        </form>
        <div class="footer-text">
                    <p class="copy">&copy;Assembler Institute Barcelona all rights reserved 2022.</p>
                    <a href="https://github.com/jose-cuevas">Jose Cuevas</a> &amp; <a
                        href="https://github.com/DogSoulDev">Javier Fernández</a>
                </div>
        <div id="error"></div>
        <div id="success-msg"></div>
    </div>
</div>

</main>
</body>

</html>