<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPAIR HANDLING</title>
    <style>
        
        body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #14383E;
}

.container {
    background-color: #fff;
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    text-align: center;
}

label, input, textarea {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

ul {
    list-style-type: none;
    padding: 0;
}

.repair-order {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
    background-color: #f8f8f8;
    position: relative;
}

.repair-order button {
    margin-top: 10px;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Repair Order Management</h1>
        <form id="repairForm">
            <label for="customerName">Customer Name:</label>
            <input type="text" id="customerName" required>
            <label for="deviceName">Device Name:</label>
            <input type="text" id="deviceName" required>
            <label for="problemDescription">Problem Description:</label>
            <textarea id="problemDescription" rows="4" required></textarea>
            <label for="repairStatus">Repair Status:</label>
            <select id="repairStatus" required>
                <option value="fresh">Fresh</option>
                <option value="delay">Delay</option>
                <option value="progress">Work in Progress</option>
                <option value="completed">Completed</option>
            </select>
            <button type="submit">Create Repair Order</button>
        </form>
        <h2>Repair Orders</h2>
        <ul id="repairOrderList"></ul>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const repairForm = document.getElementById("repairForm");
            const customerNameInput = document.getElementById("customerName");
            const deviceNameInput = document.getElementById("deviceName");
            const problemDescriptionInput = document.getElementById("problemDescription");
            const repairStatusInput = document.getElementById("repairStatus");
            const repairOrderList = document.getElementById("repairOrderList");
            const repairOrders = [];

            function renderRepairOrder(item) {
                const listItem = document.createElement("li");
                listItem.classList.add("repair-order");
                listItem.innerHTML = `
                    <strong>Customer:</strong> ${item.customerName}<br>
                    <strong>Device:</strong> ${item.deviceName}<br>
                    <strong>Problem:</strong> ${item.problemDescription}<br>
                    <strong>Status:</strong> ${item.status}<br>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                `;
                listItem.dataset.index = item.index;

                listItem.querySelector(".edit-btn").addEventListener("click", function () {
                    editRepairOrder(item.index);
                });

                listItem.querySelector(".delete-btn").addEventListener("click", function () {
                    deleteRepairOrder(item.index);
                });

                return listItem;
            }

            function createRepairOrder() {
                const customerName = customerNameInput.value;
                const deviceName = deviceNameInput.value;
                const problemDescription = problemDescriptionInput.value;
                const status = repairStatusInput.value;

                if (customerName && deviceName && problemDescription && status) {
                    const index = repairOrders.length;
                    const item = { index, customerName, deviceName, problemDescription, status };
                    repairOrders.push(item);

                    const listItem = renderRepairOrder(item);
                    repairOrderList.appendChild(listItem);

                    customerNameInput.value = "";
                    deviceNameInput.value = "";
                    problemDescriptionInput.value = "";
                    repairStatusInput.value = "fresh";
                }
            }

            function editRepairOrder(index) {
                const item = repairOrders.find(item => item.index === index);
                if (item) {
                    customerNameInput.value = item.customerName;
                    deviceNameInput.value = item.deviceName;
                    problemDescriptionInput.value = item.problemDescription;
                    repairStatusInput.value = item.status;

                    deleteRepairOrder(index);
                }
            }

            function deleteRepairOrder(index) {
                const itemIndex = repairOrders.findIndex(item => item.index === index);
                if (itemIndex !== -1) {
                    repairOrders.splice(itemIndex, 1);
                    repairOrderList.innerHTML = "";
                    repairOrders.forEach(item => {
                        const listItem = renderRepairOrder(item);
                        repairOrderList.appendChild(listItem);
                    });
                }
            }

            repairForm.addEventListener("submit", function (e) {
                e.preventDefault();
                createRepairOrder();
            });
        });
    </script>
</body>
</html>
