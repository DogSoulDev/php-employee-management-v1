<?php 

require ('./employeeManager.php');
require '../library/registerEmployee.php';

$method = $_SERVER['REQUEST_METHOD'];

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";


if ($method === 'GET' && $_SERVER['QUERY_STRING'] === 'all_data'){
   displayAllEmployees();
}else if($method === 'GET' && isset($_GET['id'])){
   $employeeId_array = getEmployee($_GET['id']);
   $object = json_encode($employeeId_array);  
   echo $object;
}
else if($method === 'DELETE'){
   // echo "esto viene de controller {$_GET['id']}";
   $employeeId_array = deleteEmployee($_GET['id']);
   $object = json_encode($employeeId_array);  
   echo $object;
}








?>
