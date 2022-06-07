<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/dashboardStyle.css">


    <script src="../assets/js/index.js" defer></script>

    <title>Dashboard</title>
</head>

<body>
    
          <div class="images">
          <div class="photo">
            <img src="../assets/img/1.png" alt="photo" />
        </div>
          <div class="photo">
            <img src="../assets/img/2.png" alt="photo" />
        </div>
        <div class="photo">
            <img src="../assets/img/3.png" alt="photo" />
        </div>
        <div class="photo">
            <img src="../assets/img/4.png" alt="photo" />
        </div>
        <div class="photo">
            <img src="../assets/img/5.png" alt="photo" />
        </div>
        <div class="photo">
            <img src="../assets/img/6.png" alt="photo" />
        </div>
        <div class="photo">
            <img src="../assets/img/8.png" alt="photo" />
        </div>
          </div>
          <nav class="navbar navbar-expand bg-light navbar__container">
        <div class="container-fluid">
            <a href="#" class="employeeSelector">Employees Manager</a>

            <div class="navbar">
                <a class="navlinks" aria-current="page"
                    href="http://127.0.0.1/php-employee-management-v1/src/dashboard.php" >Dashboard</a>
                <a class="navlinks"
                    href="http://127.0.0.1/php-employee-management-v1/src/employee.php">Employees</a>
                <button type="button" class="navlinks" id="logoutBtn">LogOut</button>
            </div>
            <!-- Just one redirection: -->
            <script type="text/javascript">
            document.getElementById("logoutBtn").onclick = function() {
                location.href = "http://127.0.0.1/php-employee-management-v1/index.php";
            };
            </script>

        </div>
        </div>
        </div>
    </nav>

    <main>
        <table class="main__table">
            <thead>
                <tr>
                    <th type="text" scope="col">Id</th>
                    <th type="text" scope="col">Name</th>
                    <th type="text" scope="col">Email</th>
                    <th type="text" scope="col">Age</th>
                    <th type="text" scope="col">Street</th>
                    <th type="text" scope="col">City</th>
                    <th type="text" scope="col">State</th>
                    <th type="text" scope="col">Postal Code</th>
                    <th type="text" scope="col">Phone Number</th>
                </tr>
            </thead>
            <tbody id="usersContainer"></tbody>
            <input type="hidden" name="action" value="listUsers">
        </table>
    </main>

</body>

</html>