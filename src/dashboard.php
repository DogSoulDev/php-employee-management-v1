<<<<<<< HEAD
<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->


//Create-Directory

<?php

 /*  include("./checkPath.php");
  $path = checkPath();

  print_r("añadir aqui ".$path);
  $name = $_POST['nameFileOrDirectory'];
  print_r("nombre".$name);
  
  $newPath = ".".$path."/".$name;
  print_r("PATH COMPLETA ".$newPath);
  if (file_exists($newPath)){
    if(isset($_SESSION["matches"])){
      unset($_SESSION["matches"]);
    }
    header("Location: ../index.php");
    echo "File already exists";
  } else {
    print_r("Creando dir: ".mkdir($newPath, 0777));
    if(isset($_SESSION["matches"])){
      unset($_SESSION["matches"]);
    }
    header("Location: ../index.php");
    echo "Directory succesfully created)";
  } */
  
?> 
=======
<?php 
session_start()
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
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/dashboardStyle.css">


    <script src="../assets/js/index.js" defer></script>

    <title>Dashboard</title>
</head>

<body>
          <nav class="navbar navbar-expand bg-light navbar__container">
        <div class="container-fluid">
            <a href="../assets/img/b.png" class="employeeSelector">Don't Click</a>
            <div class="navbar">
                <a class="navlinks" aria-current="page"
                    href="http://127.0.0.1/php-employee-management-v1/src/dashboard.php" >Dashboard</a>
                <a class="navlinks"
                    href="http://127.0.0.1/php-employee-management-v1/src/employee.php">Employees</a>
                <button type="button" class="navlinks" id="logoutBtn">LogOut</button>
                
            </div>
        </div>
    </nav>
    <main>
        <table class="main__table">
            <thead>
                <tr>
                    <th  scope="col">Id</th>
                    <th  scope="col">Name</th>
                    <th  scope="col">Email</th>
                    <th  scope="col">Age</th>
                    <th  scope="col">Street</th>
                    <th  scope="col">City</th>
                    <th  scope="col">State</th>
                    <th  scope="col">Postal Code</th>
                    <th  scope="col">Phone Number</th>
                    <th scope="col" >&nbsp;<i class="fas fa-plus"></i></th>  
                </tr>
            </thead>
            <tbody id="usersContainer"></tbody>
            <input type="hidden" name="action" value="listUsers">
            
        </table>
    </main>

</body>

</html>
>>>>>>> dashboardlogin
