<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../assets/js/employeeForm.js" type="module"></script>
    <script type="text/javascript" src="../assets/js/index.js" type="module"></script>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/employeeStyle.css">
    <title>Employee</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="neworker">
            <img src="../assets/img/worker.gif" alt="">
            </div>
            <div class="col-md-12">
                <h1 class="employeeForm">Employee Form</h1>
                <a href="http://127.0.0.1/php-employee-management-v1/src/dashboard.php">Back to Dashboard</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form id="employeeForm" action="../src/library/employeeController.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Surname</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter surname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>                   
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="man">Male</option>
                            <option value="woman">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter address"  required>
                    </div>
                    <div class="form-group">
                        <label for="street">Street Address</label>
                        <input type="text" class="form-control" id="street" name="street" placeholder="Enter street address"  required>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="Enter state"  required>
                    </div>

                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" id="age" name="age" placeholder="Enter age"  required>
                    </div>
                    <div class="form-group">
                        <label for="postalCode">Postal Code</label>
                        <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Enter postal code"  required>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone number</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number"  required>
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


