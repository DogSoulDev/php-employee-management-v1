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










// $array = array("name" => "jose", "surname" => "Cuevas");
// print_r ($array);

// $object = json_decode(json_encode($array));

// var_dump ($object);



//VOLHA EXAMPLE
/* require_once('employeeManager.php');

if (isset ($_GET ['action']) && $_GET ['action'] == 'getAll') {
     //echo "{'id':1}";
    $data = getAllData();
   echo (json_encode($data));
}
 */



?>