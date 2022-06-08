<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../assets/js/employeeForm.js" def></script>
    <script type="text/javascript" src="../assets/js/index.js" defer></script>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/employeeStyle.css">
    <title>Employee Form</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="neworker">
            <img src="../assets/img/worker.gif" alt="">
            </div>
            <div class="col-md-12">
                <h1 class="employeeForm">Employee Form</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form id="employeeForm" action="../src/library/employeeController.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter surname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                    </div>
                    <div class="form-group">
                        <label for="salary">Salary</label>
                        <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="Enter position">
                    </div>
                    <div class="form-group">
                    <button class="sendBtn" type="submit" id="submit" name="submit">Create</button>

                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>


