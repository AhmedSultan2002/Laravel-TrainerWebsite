// Select elements
const additionalServicesTable = document.getElementById('additional-services-table');
const addItemBtn = document.getElementById('add-item-btn');
const removeItemBtn = document.getElementById('remove-item-btn');
const changeItemBtn = document.getElementById("change-button");

// Add a new service to the table
addItemBtn.addEventListener('click', () => {
    const serviceName = prompt('Enter the name of the new service:');
    if (!serviceName) return;

    const servicePrice = prompt('Enter price of the new service:');
    if (!servicePrice) return;

    const serviceday = prompt('Enter day of the new service:');
    if (!serviceday) return;

    const servicetime = prompt('Enter time of the new service:');
    if (!servicetime) return;

  
    // Create a new row and cells
    const newRow = document.createElement('tr');
    const nameCell = document.createElement('td');
    const priceCell = document.createElement('td');
    const dayCell = document.createElement('td');
    const timeCell = document.createElement('td');

    // Set the text content of the cells
    nameCell.textContent = serviceName;
    priceCell.textContent = servicePrice;
    dayCell.textContent = serviceday;
    timeCell.textContent = servicetime;

    // Append cells to the row
    newRow.appendChild(nameCell);
    newRow.appendChild(priceCell);
    newRow.appendChild(dayCell);
    newRow.appendChild(timeCell);

    // Append the new row to the table body (specifically <tbody>)
    const tbody = additionalServicesTable.querySelector('tbody');
    tbody.appendChild(newRow);

    // Update table visibility
    console.log('Row added to table');

    updateDatabase(serviceName, servicePrice, serviceday, servicetime);
});

function updateDatabase(name, price, day, time) {
    price = parseInt(price)
    
    let data = {name, price, day, time};

    console.log("data to be added :", data);

    

    // Send data to the server
    fetch('/update-database', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    }).then(response => {
        if (response.ok) {
            alert('Database updated successfully!');
        } else {
            alert('Failed to update database.');
        }
    }).catch(error => {
        console.error('Error:', error);
        alert('An unexpected error occurred. Please try again.');
    });

};

// Remove the last service from the table
removeItemBtn.addEventListener('click', () => {
    
    const name = prompt("Enter name of service to be deleted.");
    if(!name)
        return;

    let CellsNum = null;
    let ServiceFound = false;
    const rows = additionalServicesTable.getElementsByTagName("tr");
    for (let i = 1; i < rows.length; i++) { // Skip the header row
        const cells = rows[i].getElementsByTagName("td");
        const Namecell = cells[0].textContent.trim();
        if (Namecell === name) {
          console.log("user given name", name);
          console.log("ID found in table", Namecell);
          CellsNum = i;
          ServiceFound = true;
          break;
        }
      }

      if(!ServiceFound){
        alert("Service does not exist");
        return;
      }
    
      
    additionalServicesTable.deleteRow(CellsNum);
      Nameobject = {name};
    fetch('/delete-item', {
        method:'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(Nameobject)
    }).then(response => {
        if (response.ok) {
            alert('Service Deleted');
        } else {
            alert('Failed to Delete Service');
        }
    }).catch(error => {
        console.error('Error:', error);
        alert('An unexpected error occurred. Please try again.');
    });

});

changeItemBtn.addEventListener('click', () => {


    let OldServiceName = prompt("Enter Service name to change");
    if(!OldServiceName)
        return;


    let ServiceFound = false;
    let CellsNum = 0;

    // Finding if service exists and extracting its index number

    const rows = additionalServicesTable.getElementsByTagName("tr");
    for (let i = 1; i < rows.length; i++) { // Skip the header row
        const cells = rows[i].getElementsByTagName("td");
        const Namecell = cells[0].textContent.trim();
        if (Namecell === OldServiceName) {
          CellsNum = i;
          console.log("index of row", CellsNum);
          ServiceFound = true;
          break;
        }
    }

    if(!ServiceFound){
        alert("No such service exists");
        return;
    }



    // Getting new values to replace the row with
    const serviceName = prompt('Enter the name of the changed service:');
    if (!serviceName) return;

    const servicePrice = prompt('Enter price of the changed service:');
    if (!servicePrice) return;

    const serviceday = prompt('Enter day of the changed service:');
    if (!serviceday) return;

    const servicetime = prompt('Enter time of the changed service:');
    if (!servicetime) return;


    const newRow = document.createElement('tr');
    const nameCell = document.createElement('td');
    const priceCell = document.createElement('td');
    const dayCell = document.createElement('td');
    const timeCell = document.createElement('td');

    nameCell.textContent = serviceName;
    priceCell.textContent = servicePrice;
    dayCell.textContent = serviceday;
    timeCell.textContent = servicetime;

    newRow.appendChild(nameCell);
    newRow.appendChild(priceCell);
    newRow.appendChild(dayCell);
    newRow.appendChild(timeCell);

    //replacing row on the front end
    console.log(additionalServicesTable.rows.length);
    oldrow = additionalServicesTable.rows[CellsNum];

    const tbody = additionalServicesTable.getElementsByTagName("tbody")[0];
    tbody.insertBefore(newRow, oldrow);
    tbody.deleteRow(CellsNum)


    alterRecord(serviceName, servicePrice, serviceday, servicetime, OldServiceName);

    
})


function alterRecord(name, price, day, time, oldname)
{

    let data = {name, price, day, time, oldname};

    // Send data to the server
    fetch('/update-record', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    }).then(response => {
        if (response.ok) {
            alert('Database updated successfully!');
        } else {
            alert('Failed to update database.');
        }
    });
}



