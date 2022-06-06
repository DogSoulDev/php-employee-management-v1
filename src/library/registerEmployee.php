<!-- TODO Application entry point. Login view -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Register Employee</title>
</head>
<body>
    <main>
        <h1>Register</h1>
        <form action="./src/library/loginControler.php" method="POST">
            <input type="email" id="email" name="email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" maxlength="100" required>
            <input type="password" id="password" name="password" required>
            <input type="password" id="confirmPassword" name="password" required>
            <input type="text" id="gender" name="gender" required>
            <button type="submit">Register</button>
        </form>
        <p><a href="../../index.php">I already have an account.</a></p>
    </main>

    <?php echo file_get_contents('../../assets/html/footer.html'); ?>

    <script src="/assets/js/index.js"></script>
</body>
</html>