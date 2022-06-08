<?php




function addEmployee(array $newEmployee)
{
    // TODO implement it
    $json = file_get_contents("../../resources/employees.json");    
    $users_array = json_decode($json, true);

    
    array_push($users_array, $newEmployee);
    print_r($users_array);

    $json_string_modified = json_encode($users_array); 
    file_put_contents("../../resources/employees.json", $json_string_modified);

    
    
    return $json_string_modified;

    
    

}

// $newUser = array (
//     "id" => getNextIdentifier(),
//     "name" => "Jose",
//     "lastName"=> "Cuevas",
//     "email"=> "cuevas@network.com",
//     "gender"=> "man",
//     "city"=> "----",
//     "streetAddress"=> "126111",
//     "state"=> "AS",
//     "age"=> "234",
//     "postalCode"=> "11",
//     "phoneNumber"=> "22312237"
// );

// addEmployee($newUser);


function deleteEmployee(string $id)
{    
    $json = file_get_contents("../../resources/employees.json");    
    $users_array = json_decode($json, true);  

    foreach ($users_array as $user => $data){      

        // print_r ($users_array);        
        if ($data['id'] == $id){
            array_splice($users_array, $user, 1);
            // unset($users_array[$user]);
        }
    }
    $json_string_modified = json_encode($users_array); 
    file_put_contents("../../resources/employees.json", $json_string_modified);
    
    return $json_string_modified;
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


function getQueryStringParameters(){
// TODO implement it
}

function getNextIdentifier(){
    $json = file_get_contents("../../resources/employees.json");    
    $users_array = json_decode($json, true);  

    $lastArrayKey = array_key_last($users_array);   
    $nextId = $lastArrayKey + 2;
    // print_r($nextId);
    return $nextId;
}

// Our functions
function displayAllEmployees(){
    $json = file_get_contents("../../resources/employees.json");
    print_r ($json);
}

function phpAlert(string $msg){
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>