<?php
// Start session to check if the user is logged in
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// If logged in, display the homepage
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - NEGO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Logo as an Image -->
        <a href="index.php">
            <img src="images/logo.jpg" alt="NEGO Logo" style="max-height: 100px;">
        </a>
        <nav>
            <a href="index.php">Home</a>
            <a href="about-us.html">About Us</a>
            <a href="contacts.html">Contacts</a>
        </nav>

        <!-- Display logout button if user is logged in -->
        <form action="logout.php" method="post">
            <button type="submit">Logout</button>
        </form>
    </header>

    <main>
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Your content here...</p>

        <!-- Product Grid -->
        <section class="product-grid">
            <!-- Product 1 -->
            <div class="product-item">
                <a href="product-details.html?name=Puma+Suede+Classic+XXI+Peacoat&price=2000&img=images/1.jpg">
                    <img src="images/1.jpg" alt="Item 1">
                </a>
                <p>Puma Suede Classic XXI Peacoat - 2,000</p>
            </div>

            <!-- Product 2 -->
            <div class="product-item">
                <a href="product-details.html?name=Asics+Gel-Kayano+14+Tai+Chi+Yellow&price=5000&img=images/2.jpg">
                    <img src="images/2.jpg" alt="Item 2">
                </a>
                <p>Asics Gel-Kayano 14 Tai Chi Yellow 7.5US - 5,000</p>
            </div>

            <!-- Product 3 -->
            <div class="product-item">
                <a href="product-details.html?name=Puma+x+Ferrari+Black+White&price=2500&img=images/3.jpg">
                    <img src="images/3.jpg" alt="Item 3">
                </a>
                <p>Puma x Ferrari Black White - 2,500</p>
            </div>

            <!-- Product 4 -->
            <div class="product-item">
                <a href="product-details.html?name=Nike+Air+Max+90+White+Red&price=4500&img=images/4.jpg">
                    <img src="images/4.jpg" alt="Item 4">
                </a>
                <p>Nike Air Max 90 White Red - 4,500</p>
            </div>

            <!-- Product 5 -->
            <div class="product-item">
                <a href="product-details.html?name=Adidas+UltraBoost+2020+Core+Black&price=7000&img=images/5.jpg">
                    <img src="images/5.jpg" alt="Item 5">
                </a>
                <p>Adidas UltraBoost 2020 Core Black - 7,000</p>
            </div>

            <!-- Product 6 -->
            <div class="product-item">
                <a href="product-details.html?name=New+Balance+574+Black+Grey&price=4000&img=images/6.jpg">
                    <img src="images/6.jpg" alt="Item 6">
                </a>
                <p>New Balance 574 Black Grey - 4,000</p>
            </div>

            <!-- Product 7 -->
            <div class="product-item">
                <a href="product-details.html?name=Vans+Old+Skool+Black+White&price=3000&img=images/7.jpg">
                    <img src="images/7.jpg" alt="Item 7">
                </a>
                <p>Vans Old Skool Black White - 3,000</p>
            </div>

            <!-- Product 8 -->
            <div class="product-item">
                <a href="product-details.html?name=Converse+Chuck+Taylor+All+Star+Red&price=2500&img=images/8.jpg">
                    <img src="images/8.jpg" alt="Item 8">
                </a>
                <p>Converse Chuck Taylor All Star Red - 2,500</p>
            </div>

            <!-- Product 9 -->
            <div class="product-item">
                <a href="product-details.html?name=Reebok+Classic+Leather+White&price=3500&img=images/9.jpg">
                    <img src="images/9.jpg" alt="Item 9">
                </a>
                <p>Reebok Classic Leather White - 3,500</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 NEGO Shop</p>
    </footer>
</body>
</html>
