
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