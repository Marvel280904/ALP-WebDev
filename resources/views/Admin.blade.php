<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styling (optional) */
        .table-wrapper {
            margin: 20px;
        }
        .form-inline .form-control {
            width: auto;
        }
        .form-control {
            margin-right: 10px !important;
        }
        .table-responsive{
            margin: 20px;
            width: auto;
        }
    </style>
</head>
<body>
<div class="table-wrapper">
    <a href="{{ route('Home') }}" class="btn btn-primary">Back home page</a><br><br>
    <h3>Transaction Data</h3>
    <div class="table-responsive">
        <input class="form-control mb-3" id="searchInputTransactions" type="text" placeholder="Search transactions...">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th onclick="sortTable(0, 'transactionTable')">Transaction ID</th>
                    <th onclick="sortTable(1, 'transactionTable')">Date</th>
                    <th onclick="sortTable(2, 'transactionTable')">Customer Name</th>
                    <th onclick="sortTable(3, 'transactionTable')">Amount</th>
                    <th onclick="sortTable(4, 'transactionTable')">Status</th>
                </tr>
            </thead>
            <tbody id="transactionTable">
                <tr>
                    <td>TXN001</td>
                    <td>2024-05-20</td>
                    <td>John Doe</td>
                    <td>$100.00</td>
                    <td>Completed</td>
                </tr>
                <tr>
                    <td>TXN002</td>
                    <td>2024-05-21</td>
                    <td>Jane Smith</td>
                    <td>$200.00</td>
                    <td>Pending</td>
                </tr>
                <!-- More rows as needed -->
            </tbody>
        </table>
    </div>
</div>


<div class="table-wrapper">
    <h3>Catalog maintenance</h3>
    <div class="mb-3 isi" style="display: flex;">
        <input class="form-control mr-2" id="productName" type="text" placeholder="Product Name">
        <input class="form-control mr-2" id="brandshoes" type="text" placeholder="Brand">
        <input class="form-control mr-2" id="catagory" type="text" placeholder="Category">
        <input class="form-control mr-2" id="gender" type="text" placeholder="Gender">
        <input class="form-control mr-2" id="color" type="text" placeholder="Color">
        <input class="form-control mr-2" id="price" type="number" placeholder="Price">
        <input class="form-control mr-2" id="image" type="text" placeholder="Link image">
        <button class="btn btn-success" onclick="addProduct()">Add Product</button>
    </div>
</div>

<div class="table-responsive">
    <input class="form-control mb-3" id="searchInputProducts" type="text" placeholder="Search products...">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th onclick="sortTable(0, 'productTable')">Product ID</th>
                <th onclick="sortTable(1, 'productTable')">Product Name</th>
                <th onclick="sortTable(2, 'productTable')">Brand Shoes</th>
                <th onclick="sortTable(3, 'productTable')">Category</th>
                <th onclick="sortTable(4, 'productTable')">Gender</th>
                <th onclick="sortTable(5, 'productTable')">Color</th>
                <th onclick="sortTable(6, 'productTable')">Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="productTable">
            <tr>
                <td>PROD001</td>
                <td>Product 1</td>
                <td>Brand 1</td>
                <td>Category 1</td>
                <td>Male</td>
                <td>Blue</td>
                <td>$10.00</td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="editProduct(this)">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteProduct(this)">Delete</button>
                </td>
            </tr>
            <tr>
                <td>PROD002</td>
                <td>Product 2</td>
                <td>Brand 2</td>
                <td>Category 2</td>
                <td>Female</td>
                <td>Red</td>
                <td>$20.00</td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="editProduct(this)">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteProduct(this)">Delete</button>
                </td>
            </tr>
            <!-- More rows as needed -->
        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // Pencarian Transaksi
    $(document).ready(function(){
        $("#searchInputTransactions").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#transactionTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    // Pencarian Produk
    $(document).ready(function(){
        $("#searchInputProducts").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#productTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    // Pengurutan
    function sortTable(columnIndex, tableId) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById(tableId);
        switching = true;
        dir = "asc"; 
        while (switching) {
            switching = false;
            rows = table.rows;
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[columnIndex];
                y = rows[i + 1].getElementsByTagName("TD")[columnIndex];
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                switchcount++;
            } else {
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }

    // Manajemen Produk
    let productId = 3; // Starting from 3 due to dummy data
    function addProduct() {
        let name = document.getElementById("productName").value;
        let price = document.getElementById("productPrice").value;
        if (name && price) {
            let table = document.getElementById("productTable");
            let row = table.insertRow();
            row.innerHTML = `<td>PROD${productId++}</td>
                             <td>${name}</td>
                             <td>$${price}</td>
                             <td>
                                 <button class="btn btn-primary btn-sm" onclick="editProduct(this)">Edit</button>
                                 <button class="btn btn-danger btn-sm" onclick="deleteProduct(this)">Delete</button>
                             </td>`;
            document.getElementById("productName").value = '';
            document.getElementById("productPrice").value = '';
        }
    }

    function editProduct(button) {
        let row = button.parentNode.parentNode;
        let name = row.cells[1].innerHTML;
        let price = row.cells[2].innerHTML.substring(1);
        document.getElementById("productName").value = name;
        document.getElementById("productPrice").value = price;
        deleteProduct(button); // remove the current row to add the updated values
    }

    function deleteProduct(button) {
        let row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>
</body>
</html>
