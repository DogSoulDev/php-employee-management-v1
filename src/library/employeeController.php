<?php 

require ('employeeManager.php');

$method = $_SERVER['REQUEST_METHOD'];

// echo "<pre>";

if ($method === 'GET'){
   displayAllEmployees();
}




// $_GET['id'] = 1;
if ($method === 'GET' && isset($_GET['id'])){   
   $employeeId_array = getEmployee($_GET['id']);
   $object = json_encode($employeeId_array);  
   
   print_r ($employeeId_array);
   // var_dump ($object);   
}
