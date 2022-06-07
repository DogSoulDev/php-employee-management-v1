<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <script type="text/javascript" src="./assets/js/index.js" defer></script>
    <script type="text/javascript" src="./assets/js/contactScript.js" def></script>
    <link rel="stylesheet" href="./assets/css/loginStyle.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/contact.css">

    <title>Dashboard</title>
</head>

<body>
<?php
        require("./dashboardHeader.php");
    ?>

<main>
    <table class="main__table">
    <thead>
        <tr>
            <th scope="col" >Id</th>
            <th scope="col" >Name</th>
            <th scope="col" >Email</th>
            <th scope="col" >Age</th>
            <th scope="col" >Street</th>
            <th scope="col" >City</th>
            <th scope="col" >State</th>
            <th scope="col" >Postal Code</th>
            <th scope="col" >Phone Number</th>      
            <th scope="col" >&nbsp;<i class="fas fa-plus"></i></th>      
        </tr>
    </thead>
    <tbody id="usersContainer"></tbody>

    <input type="hidden" name="action" value="listUsers">

    

    <!-- Tbody adds dinamically with JS -->
    <!-- <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody> -->
    </table>
</main>
    
</body>
</html>
