<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your eCommerce Store</title>
    <!--<link rel="stylesheet" href="styles.css">  Link to your CSS file -->
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
    color: #343a40;
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
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>
    <header>
        <h1>Welcome to Your eCommerce Store</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="checkout.php">Checkout</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="featured-products">
            <h2>Featured Products</h2>
            <?php
            // Example featured product data
            $featuredProducts = [
                ['name' => 'Product 1', 'price' => 19.99],
                ['name' => 'Product 2', 'price' => 29.99],
                ['name' => 'Product 3', 'price' => 39.99],
                ['name' => 'Product 4', 'price' => 49.99],
            ];

            foreach ($featuredProducts as $product) {
                echo '<div class="product">' . $product['name'] . ' - $' . $product['price'] . '</div>';
            }
            ?>
        </section>
        
        <section class="latest-deals">
            <h2>Latest Deals</h2>
            <?php
            // Example latest deals data
            $latestDeals = [
                ['name' => 'Deal 1', 'discount' => 20],
                ['name' => 'Deal 2', 'discount' => 30],
                ['name' => 'Deal 3', 'discount' => 15],
            ];

            foreach ($latestDeals as $deal) {
                echo '<div class="deal">' . $deal['name'] . ' - ' . $deal['discount'] . '% off</div>';
            }
            ?>
        </section>
    </main>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your eCommerce Store. All rights reserved.</p>
    </footer>
</body>
</html>
