<?php



function addEmployee(array $newEmployee)
{
// TODO implement it
}


function deleteEmployee(string $id)
{
// TODO implement it
// 1. Catch json form users.json and transform to a php object
// 2. Iterate all this array using for each
// 3. if ($id = object.id) -> delete all this object
// 4. Transform to object json and save as users.json
}


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