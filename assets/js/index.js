"user strict";

const usersContainer = document.getElementById("usersContainer");
const addEmployee = document.getElementById("addEmployee");
const employeeControlerUrl = "../src/library/employeeController.php?all_data";
const employeeControllerUrlGet = "../src/library/employeeController.php?id=";


window.addEventListener('load', ()=>{
     fetch(employeeControlerUrl)
    .then(response=> response.json())
    .then (data=> {
        console.log(data);        
        console.log(Object.values(data)); 
        updateTable(data);        
        addEventListenerToDeleteBtn(data);
    });
});

const deleteChildNodes = (parent) => {
  while (parent.firstChild) {
    parent.removeChild(parent.lastChild);
  }
};

function updateTable(data) {
    deleteChildNodes(usersContainer);
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
            <td>&nbsp;<a href="#" class='user-data' id="${user.id}" data-user="${user.id}" ><i class="fas fa-trash-alt" ></i></a></td>
        <tr>
        `;
        usersContainer.append(tableRow);       
    });
}


function addEventListenerToDeleteBtn(){
    const userId = document.querySelectorAll("[data-user]");
    userId.forEach(user=>{
        user.addEventListener('click', (e)=>{
            const aElement = e.target.parentElement; 
            console.log(aElement);   
            const id = aElement.getAttribute('data-user');
            console.log(id);
            deleteEmployee(id);                        
        })
    })
}


async function deleteEmployee(id){
    const response =  await fetch(`${employeeControllerUrlGet}${id}`, {
        method: 'DELETE',
        headers: {
            "content-type": "application/json",
        }
    });
    const data = await response.json();    
    updateTable(data);
    addEventListenerToDeleteBtn();
    console.log(data);
}

async function getEmployeeId(id) {
  const response = await fetch(`${employeeControllerUrlGet}${id}`, {
    method: "GET",
    headers: {
      "content-type": "application/json",
    },
  });
  const data = await response.json();
  return data;
}


// Add employee on dashboard
addEmployee.addEventListener('click', ()=>{
    const tableRow = document.createElement('tr');
    tableRow.innerHTML = 
    `
    <form id="formDashboard" action="../src/library/employeeController.php" method="POST">
    <tr>        
        <td>
            <input type="text" class="form-control" id="name" name="name" required>
        </td>
        <td>
            <input type="text" class="form-control" id="lastName" name="lastName" required>
        </td>
        <td>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
        </td>
        <td><input type="text" class="form-control" id="age" name="age" required></td>
        <td><input type="text" class="form-control" id="street" name="street" required></td>
        <td><input type="text" class="form-control" id="city" name="city" required></td>
        <td><input type="text" class="form-control" id="state" name="state" required></td>
        <td><input type="text" class="form-control" id="postalCode" name="postalCode" required></td>
        <td><input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required></td>
        <td>
            <button class="sendBtnSmall" type="submit" id="addEmployeeSmall" name="submit">+</button>          
        </td>
    <tr>
    </form>
    `;
    usersContainer.insertAdjacentElement('afterbegin', tableRow);

    const formDashboard = new FormData();
    console.log(formDashboard);


    // const formDashboard = document.getElementById('formDashboard');    
    // formDashboard.addEventListener('submit', function(e){
    //     // e.preventDefault();
    //     alert('works!');
    //     const formData = new FormData(this);
    //     console.log(formData);
    // })
    

})
