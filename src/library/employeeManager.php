<?php



function addEmployee(array $newEmployee)
{
// TODO implement it
}


function deleteEmployee(string $id)
{
    // TODO implement it    
    
    $json = file_get_contents("../../resources/employees.json");    
    $users_array = json_decode($json, true);    

    foreach ($users_array as $key=>$user){
        if ($user['id'] == $id){
            unset($users_array[$key]);
        }
    }
    // 
    $json_string_modified = json_encode($users_array); 
    file_put_contents("../../resources/employees.json", $json_string_modified);
    
    return $json_string_modified;
}

// deleteEmployee(8);


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

// getEmployee(2);



function removeAvatar($id)
{
// TODO implement it
}


function getQueryStringParameters(): array
{
// TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
}

// Our functions
function displayAllEmployees(){
    $json = file_get_contents("../../resources/employees.json");
    print_r ($json);
}

?>
