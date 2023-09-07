<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-commerce Admin Panel</title>
    <!--<link rel="stylesheet" href="styles.css">-->
    <style>
        /* Reset some default styles */
body, h1, h2, ul, li, p {
    margin: 0;
    padding: 0;
}

/* Basic styling */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
}

header {
    background-color: #343a40;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}
nav ul {
    list-style: none;
}


nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #212529;
}

main {
    padding: 20px;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #343a40;
    color: #fff;
}

.dashboard {
    background-color: #F2D1A8;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Admin Panel</h1>
        <nav>
            <ul>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="products.php">Manage Products</a></li>
                <li><a href="orders.php">Manage Orders</a></li>
                <!-- Add more navigation links as needed -->
            </ul>
        </nav>
    </header>

    <main>
        <section class="dashboard">
            <!-- Your dashboard content goes here -->
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Your E-commerce Store. All rights reserved.</p>
    </footer>
</body>
</html>
