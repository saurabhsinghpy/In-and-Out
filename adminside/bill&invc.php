<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing and Invoicing</title>

<style>
    /* Reset some default browser styles */
body, h1, h2, p, ul, li, table, th, td {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
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

label, input, button {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

tfoot {
    font-weight: bold;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

#totalAmount {
    font-size: 1.2em;
    margin-top: 10px;
    text-align: right;
}
</style>
</head>
<body>
    <div class="container">
        <h1>Billing and Invoicing</h1>
        <h2>Add Items to Invoice</h2>
        <form id="addItemForm">
            <label for="itemName">Item Name:</label>
            <input type="text" id="itemName" required>
            <label for="itemPrice">Item Price:</label>
            <input type="number" id="itemPrice" required>
            <button type="submit">Add Item</button>
        </form>
        <h2>Invoice</h2>
        <table id="invoiceTable">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Item Price</th>
                </tr>
            </thead>
            <tbody id="invoiceBody"></tbody>
            <tfoot>
                <tr>
                    <td><strong>Total:</strong></td>
                    <td id="totalAmount">$0.00</td>
                </tr>
            </tfoot>
        </table>
        <button id="generateInvoiceButton">Generate Invoice</button>
    </div>
    <script>
	
    document.addEventListener("DOMContentLoaded", function () {
    const addItemForm = document.getElementById("addItemForm");
    const itemNameInput = document.getElementById("itemName");
    const itemPriceInput = document.getElementById("itemPrice");
    const invoiceTable = document.getElementById("invoiceTable");
    const invoiceBody = document.getElementById("invoiceBody");
    const totalAmount = document.getElementById("totalAmount");
    const generateInvoiceButton = document.getElementById("generateInvoiceButton");

    const items = [];

    addItemForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const itemName = itemNameInput.value;
        const itemPrice = parseFloat(itemPriceInput.value);

        if (!itemName || isNaN(itemPrice) || itemPrice <= 0) {
            alert("Please enter valid item details.");
            return;
        }

        items.push({ name: itemName, price: itemPrice });

        const row = document.createElement("tr");
        row.innerHTML = `<td>${itemName}</td><td>$${itemPrice.toFixed(2)}</td>`;
        invoiceBody.appendChild(row);

        updateTotal();
        
        itemNameInput.value = "";
        itemPriceInput.value = "";
    });

    generateInvoiceButton.addEventListener("click", function () {
        if (items.length === 0) {
            alert("No items in the invoice.");
            return;
        }

        const invoiceWindow = window.open("", "Invoice", "width=600,height=400");
        invoiceWindow.document.open();
        invoiceWindow.document.write("<html><head><title>Invoice</title></head><body>");
        invoiceWindow.document.write("<h2>Invoice</h2>");
        invoiceWindow.document.write("<table>");
        invoiceWindow.document.write("<thead><tr><th>Item Name</th><th>Item Price</th></tr></thead>");
        invoiceWindow.document.write("<tbody>");

        for (const item of items) {
            invoiceWindow.document.write(`<tr><td>${item.name}</td><td>$${item.price.toFixed(2)}</td></tr>`);
        }

        invoiceWindow.document.write("</tbody>");
        invoiceWindow.document.write("</table>");
        invoiceWindow.document.write(`<p><strong>Total: $${getTotalAmount().toFixed(2)}</strong></p>`);
        invoiceWindow.document.write("</body></html>");
        invoiceWindow.document.close();
    });

    function updateTotal() {
        const amount = getTotalAmount();
        totalAmount.textContent = `$${amount.toFixed(2)}`;
    }

    function getTotalAmount() {
        return items.reduce((total, item) => total + item.price, 0);
    }
});

    </script>
</body>
</html>