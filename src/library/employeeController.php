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
   // $object = json_encode($employeeId_array);  
   echo $employeeId_array;

} else if ($method === 'POST'){   
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

   addEmployee($newUser);   
   phpAlert("Employee Successfully Saved!");
   header("Location:../dashboard.php");   
}elseif($method === "PUT" && $_SERVER['QUERY_STRING'] === 'add'){
   $data = json_decode(file_get_contents("php://input"), true);
   $newUser = array (
      "id"=> getNextIdentifier(),
      "name"=> $data['name'],
      "email"=> $data['email'],
      "age"=> $data['age'],
   "street"=> $data['streetAddress'],
      "city"=> $data['city'],
      "state"=> $data['state'],
      "postalCode"=> $data['postalCode'],
      "phoneNumber"=> $data['phoneNumber']
   );
   addEmployee($newUser); 
   $json = file_get_contents("../../resources/employees.json");    
    echo $json;
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
