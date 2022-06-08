import {addEventListenerToaddEmployee} from './addEmployee.js';

const usersContainer = document.getElementById("usersContainer");
const employeeControlerUrl = "../src/library/employeeController.php?all_data";
const employeeControllerUrlGet = "../src/library/employeeController.php?id=";

// * Without async / await
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
        
        // addEventListenerToaddEmployee();
               
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

// deleteEmployee(1);

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


export {updateTable}





// getEmployeeId (4);
