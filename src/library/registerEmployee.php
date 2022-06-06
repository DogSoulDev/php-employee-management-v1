<!-- TODO Application entry point. Login view -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script type="text/javascript" src="./assets/js/contactScript.js" def></script>
    <link rel="stylesheet" href="../../assets/css/login.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/contact.css">
    <link rel="stylesheet" href="../../assets/css/employeeStyle.css">
    <title>Register Employee</title>
</head>

<body>
    <main>
        <section class="container">
        <img class="onepunch" src="../../assets/img/c.png">
        <form action="./loginController.php" method="POST">
        <p class="register-in">Register new employee</p>
            <div class="input-container">
                <input type="email" id="email" name="email" placeholder="Email"
                    pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" maxlength="100" required>
            </div>
            <div class="input-container">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="confirmPassword" name="password" placeholder="Confirm password" required>
            </div>
            <script type="text/javascript" src="./assets/js/index.js" defer></script>
            <button type="submit" class="register-btn">Register</button>
            <p><a href="../../index.php">I already have an account.</a></p>
        </form>
        </section>
                <div class="footer-text">
                    <p class="copy">&copy;Assembler Institute Barcelona all rights reserved 2022.</p>
                    <a href="https://github.com/jose-cuevas">Jose Cuevas</a> &amp; <br><a
                        href="https://github.com/DogSoulDev">Javier Fernández</a>
                </div>
    </main>
    <script src="/assets/js/index.js"></script>
</body>

</html>