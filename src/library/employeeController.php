<?php 

require ('employeeManager.php');

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET'){
   displayAllEmployees();
}




//VOLHA EXAMPLE
/* require_once('employeeManager.php');

if (isset ($_GET ['action']) && $_GET ['action'] == 'getAll') {
     //echo "{'id':1}";
    $data = getAllData();
   echo (json_encode($data));
}
 */



?>