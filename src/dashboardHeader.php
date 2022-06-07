<?php
    // $userId = $_COOKIE["userId"];
    // $userName = $_COOKIE["userName"];
    // $userEmail = $_COOKIE["userEmail"];
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
        <title>Dashboard Head</title>
    </head>
    <header>
        <img src='../'>
        <h2 class = 'title' >Employee List</h2>
        <nav class = 'nav'>
            <button class = 'dashboardBtn'><a href='http://127.0.0.1/php-employee-management-v1/src/dashboard.php'>Dashboard</a></button>
            <button class = 'myInfoBtn'><a href='http://127.0.0.1/php-employee-management-v1/src/employee.php?userId=$userId'>Info</a></button>
            <button class= 'logOutBtn'><a href='http://127.0.0.1/php-employee-management-v1/index.php?logout=true'>Logout</a></button>
            </nav>
    </header>
    <body>

    </body>
    
    </html>