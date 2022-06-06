'user strict'

const usersContainer =  document.getElementById('usersContainer');
const userId = document.querySelectorAll("[data-userId]");
console.log(userId);

const employeeControlerUrl = '../src/library/employeeController.php';

const employeeControllerUrlGet = '../src/library/employeeController.php?id='


// * Without async / await
window.addEventListener('load', ()=>{
     fetch(employeeControlerUrl)
    .then(response=> response.json())
    .then (data=> {
        console.log(data);        
        data.forEach(user=>{
            const tableRow = document.createElement('tr');
            tableRow.innerHTML = `
            <tr>
                <td>${user.id}</td>
                <td>${user.name}</td>
                <td>${user.email}</td>
                <td>${user.age}</td>
                <td>${user.streetAddress}</td>
                <td>${user.city}</td>
                <td>${user.state}</td>
                <td>${user.postalCode}</td>
                <td>${user.phoneNumber}</td>
                <td>&nbsp;<a href="#" id="${user.id} data-userId="${user.id}"><i class="fas fa-trash-alt"></i></a></td>
            <tr>        
            `;
            usersContainer.append(tableRow);            
        });
        
    });
});





// *With async / await
// window.addEventListener('load',async()=>{
//     await getEmployees();
// });

// async function getEmployees (){
//     const res = await fetch(employeeControlerUrl, {
//         method: 'GET',
//         headers: {
//             "content-type": "application/json",
//         } 
//     })
//     const data = await res.json();
//     console.log(data);
//     data.forEach(user=>{
//             const tableRow = document.createElement('tr');
//             tableRow.innerHTML = `
//             <tr>
//                 <td>${user.id}</td>
//                 <td>${user.name}</td>
//                 <td>${user.email}</td>
//                 <td>${user.age}</td>
//                 <td>${user.streetAddress}</td>
//                 <td>${user.city}</td>
//                 <td>${user.state}</td>
//                 <td>${user.postalCode}</td>
//                 <td>${user.phoneNumber}</td>
//                 <td>&nbsp;<a href="#" id="${user.id} data-userId="${user.id}"><i class="fas fa-trash-alt"></i></a></td>
//             <tr>        
//             `;
//             usersContainer.append(tableRow);   
            
            
//         });
// }

// const userId = document.querySelectorAll("[data-userId]");
// console.log(userId);

// console.log(`${employeeControllerUrlGet}${6}`);
// otuput -> ../src/library/employeeController.php?id=6




async function getEmployeeId (id){
    const response = await fetch(`${employeeControllerUrlGet}${id}`, {
        method: 'GET',
        headers: {
            "content-type": "application/json",
        }
    });
    const data = await response.json();
    console.log(data);
    return data;
}


// getEmployeeId (4);

















//VOLHA EXAMPLE





/* onload = () => {
    getAllData();
}

const getAllData = () => {
    const URL =
    "https://localhost/C:/xampp/htdocs/php-employee-management-v1";
}

fetch (URL)
.then ((response) => res.json())
.then ((data) => {
    const dataEmployees = JSON.parse(data);
    console.log(dataEmployees);
    const employeeRow = document.getElementById("employeeRow");
    const emploeeId = document.getElementById("td");
    const employeeName = document.getElementById("td");
    const employeeEmail = document.getElementById("td");
    const employeePhone = document.getElementById("td");
    const employeeAddress = document.getElementById("td");
    const employeeSalary = document.getElementById("td");
    const employeeAge = document.getElementById("td");
    const employeeGender = document.getElementById("td");
    const employeeDepartment = document.getElementById("td");
    const employeeHireDate = document.getElementById("td");
    const employeeJob = document.getElementById("td");


    employeeId.textContent = dataEmployees[0].id;
    employeeName.textContent = dataEmployees[0].name;
    employeeEmail.textContent = dataEmployees[0].email;
    employeePhone.textContent = dataEmployees[0].phone;
    employeeAddress.textContent = dataEmployees[0].address;
    employeeSalary.textContent = dataEmployees[0].salary;
    employeeAge.textContent = dataEmployees[0].age;
    employeeGender.textContent = dataEmployees[0].
    employeeDepartment.textContent = dataEmployees[0].department;
    employeeHireDate.textContent = dataEmployees[0].hireDate;
    employeeJob.textContent = dataEmployees[0].job;


employeeRow.append(employeeId);
employeeRow.append(employeeName);
employeeRow.append(employeeEmail);
employeeRow.append(employeePhone);
employeeRow.append(employeeAddress);
employeeRow.append(employeeSalary);
employeeRow.append(employeeAge);
employeeRow.append(employeeGender);
employeeRow.append(employeeDepartment);
employeeRow.append(employeeHireDate);
employeeRow.append(employeeJob);

})

.catch ((error) => {
    console.log(error);
}); */