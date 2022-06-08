import { updateTable } from "./index.js";

const addEmployee = document.getElementById("addEmployee");
const employeeContainer = document.getElementById("usersContainer");



function addEventListenerToaddEmployee(){
    addEmployee.addEventListener('click', (e)=>{
        e.preventDefault();
        const trElement = document.createElement('tr');
        const tdElementID = document.createElement('td');
        const tdElementName = document.createElement('td');
        const tdElementEmail = document.createElement('td');
        const tdElementAge = document.createElement('td');
        const tdElementStreet = document.createElement('td');
        const tdElementCity = document.createElement('td');
        const tdElementState = document.createElement('td');
        const tdElementPostal = document.createElement('td');
        const tdElementPhone = document.createElement('td');
        const tdElementAdd = document.createElement('td');

        trElement.append(tdElementID, tdElementName, tdElementEmail, tdElementAge, tdElementStreet,
             tdElementCity, tdElementState, tdElementPostal, tdElementPhone, tdElementAdd);

             const inputName = document.createElement('input');
             inputName.id= 'inputName';
             const inputID = document.createElement('input');
                inputID.id= 'inputID';
                inputID.style.visibility = "hidden"
             const inputEmail = document.createElement('input');
                inputEmail.id= 'inputEmail';
             const inputAge = document.createElement('input');
                inputAge.id= 'inputAge';
             const inputStreet = document.createElement('input');
                inputStreet.id= 'inputStreet';
             const inputCity = document.createElement('input');
                inputCity.id= 'inputCity';
             const inputState = document.createElement('input');
                inputState.id= 'inputState';
             const inputPostal = document.createElement('input');
                inputPostal.id= 'inputPostal';
             const inputPhone = document.createElement('input');
                inputPhone.id= 'inputPhone';
            const addButton = document.createElement('button');
            addButton.id = 'addButton';
            addButton.textContent = 'Add';
            
             
        tdElementID.appendChild(inputID);
        tdElementName.appendChild(inputName);
        tdElementEmail.appendChild(inputEmail);
        tdElementAge.appendChild(inputAge);
        tdElementStreet.appendChild(inputStreet);
        tdElementCity.appendChild(inputCity);
        tdElementState.appendChild(inputState);
        tdElementPostal.appendChild(inputPostal);
        tdElementPhone.appendChild(inputPhone);
        tdElementAdd.appendChild(addButton);


        
        employeeContainer.insertBefore(trElement, employeeContainer.firstChild);
            

            
addButton.addEventListener('click', ()=>{
    const employeeData = {
        
        name: inputName.value,
        email: inputEmail.value,
        age: inputAge.value,
        street: inputStreet.value,
        city: inputCity.value,
        state: inputState.value,
        postal: inputPostal.value,
        phone: inputPhone.value,
    }
    addEmployeeToDB(employeeData);
})

    }
    )
}

addEventListenerToaddEmployee();


async function addEmployeeToDB(employee){
    const response = await fetch('../src/library/employeeController.php?add', {
        method: "PUT",
        headers: {
            "content-type": "application/json",
        },
        body: JSON.stringify({
            name: employee.name,
            email: employee.email,
            age: employee.age,
            streetAddress: employee.street,
            city: employee.city,
            state: employee.state,
            postalCode: employee.postal,
            phoneNumber: employee.phone
    
        }),
    });
    const data = await response.json();

    updateTable(data);
   
}




export {addEventListenerToaddEmployee}