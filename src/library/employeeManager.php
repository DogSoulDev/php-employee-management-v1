<?php



function addEmployee(array $newEmployee)
{
// TODO implement it



}


function deleteEmployee(string $id)
{
      
    
    $json = file_get_contents("../../resources/employees.json");    
    $users_array = json_decode($json, true);  

    foreach ($users_array as $user => $data){
        echo "<pre>";

        // print_r ($users_array);        
        if ($data['id'] == $id){
            unset($users_array[$user]);
        }
    }
     
    $json_string_modified = json_encode($users_array); 
    file_put_contents("../../resources/employees.json", $json_string_modified);
    
    print_r ($json_string_modified);
}


// deleteEmployee(2);


function updateEmployee(array $updateEmployee)
{
// TODO implement it
}

function getEmployee(string $id)
{
// TODO implement it
    $json = file_get_contents("../../resources/employees.json");
    $user_array = json_decode($json, true);  

    $employeeData = '';
    foreach($user_array as $user) {
        if($user['id'] == $id) {
            // print_r ($user);
            $employeeData = $user;            
        }
    }
        return $employeeData;
}

// getEmployee(45);



function removeAvatar($id)
{
// TODO implement it
}


// function getQueryStringParameters():{
// // TODO implement it
// }

// function getNextIdentifier(array $employeesCollection):{
// // TODO implement it
// }

// Our functions
function displayAllEmployees(){
    $json = file_get_contents("../../resources/employees.json");
    print_r ($json);
}

?>
