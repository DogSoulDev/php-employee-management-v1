<?php 

require ('employeeManager.php');

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

else if ($method === 'POST'){   
   $newUser = array (
      "id"=> getNextIdentifier(),
      "name"=> $_POST['name'],
      "lastName"=> $_POST['lastName'],
      "email"=> $_POST['email'],
      "gender"=> $_POST['gender'],
      "city"=> $_POST['city'],
      "street"=> $_POST['street'],
      "state"=> $_POST['state'],
      "age"=> $_POST['age'],
      "postalCode"=> $_POST['postalCode'],
      "phoneNumber"=> $_POST['phoneNumber']
   );  
   // print_r($newUser);

   addEmployee($newUser);
   

}




// // $_GET['id'] = 1;
// if ($method === 'GET' && isset($_GET['id'])){   
//    $employeeId_array = getEmployee($_GET['id']);
//    $object = json_encode($employeeId_array);  
//    echo $object;

//    // print_r ($employeeId_array);
//    // var_dump ($object);   
// }










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
