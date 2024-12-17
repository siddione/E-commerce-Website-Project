<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            display: flex;
            flex-direction: column;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
        }

        .sidebar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            padding: 15px 0;
            background-color: #212529;
            border-bottom: 1px solid #444;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid #444;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: white;
            font-size: 1rem;
            display: block;
        }

        .sidebar ul li a:hover {
            background-color: #495057;
            padding-left: 20px;
        }

        /* Main content */
        .main-content {
            margin-left: 250px;
            flex: 1;
            padding: 20px;
            background-color: #f8f9fa;
            height: 100vh;
            overflow-y: auto;
        }

        .top-bar {
            background-color: #ffffff;
            padding: 15px 20px;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar .title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .top-bar .admin-menu {
            font-size: 1rem;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">o'clocks</div>
        <ul>
            <li><a href="ad_board.php">Dashboard</a></li>
            <li><a href="inventory.php">Inventory</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Sales Reports</a></li>
        </ul>
    </div>    

    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="content-header">
            <h1>Inventory Management</h1>
            <a href="add_item.php" class="btn btn-success">+ Add New Item</a>
        </div>

        <!-- Inventory Table -->
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price (₱)</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Data -->
                <tr>
                    <td>1</td>
                    <td>Luxury Watch A</td>
                    <td>25</td>
                    <td>₱15,000.00</td>
                    <td>Limited Edition</td>
                    <td>
                        <a href="edit_item.php?id=1" class="btn btn-sm btn-warning">Edit</a>
                        <a href="delete_item.php?id=1" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Classic Watch B</td>
                    <td>30</td>
                    <td>₱10,500.00</td>
                    <td>Classic Style</td>
                    <td>
                        <a href="edit_item.php?id=2" class="btn btn-sm btn-warning">Edit</a>
                        <a href="delete_item.php?id=2" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </td>
                </tr>
                <!-- Dynamically load more data using PHP -->
            </tbody>
        </table>
    </div>
</body>
</html>
