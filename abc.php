<!DOCTYPE html>
<html>
<head>
    <title>Your eCommerce Store</title>
    <link rel="stylesheet" href="styles.css">
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
                <?php
                    session_start();
                    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
                        echo '<li><a href="logout.php">logout</a></li>';
                    }
                    else{
                        echo '<li><a href="login.php">Login/SignUP</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="featured-products">
            <h2>All Products</h2>
            <?php
                // Your PHP code to fetch and display featured products goes here
            ?>
        </section>
        
        <section class="latest-deals">
            <h2>Latest Deals</h2>
            <?php
                // Your PHP code to fetch and display latest deals goes here
            ?>
        </section>
    </main>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your eCommerce Store. All rights reserved.</p>
    </footer>
</body>
</html>
