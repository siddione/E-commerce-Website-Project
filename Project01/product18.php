<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolex Milgauss</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Cambria', serif;
            background: #f4f4f4;
            color: #333;
            margin: 0;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 30px;
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar a img {
            width: 120px;
            height: auto;
        }

        .brand-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            text-decoration: none;
            margin-right: 30px;
        }

        .cart-icon-container {
            display: flex;
            align-items: center;
        }

        .cart-icon {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .cart-count {
            background: #d9534f;
            color: #fff;
            font-size: 0.9rem;
            border-radius: 50%;
            padding: 4px 8px;
        }

        /* Product Section Styling */
        .product-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 30px;
            margin-top: 70px;
        }

        .product-image {
            max-width: 500px;
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-details {
            max-width: 500px;
            width: 100%;
            padding-left: 30px;
        }

        .product-details h2 {
            font-size: 2rem;
            color: #000;
        }

        .product-details p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #d9534f;
            margin-bottom: 20px;
        }

        /* Other Products Section Styling */
        .other-products {
            padding: 50px 0;
            background-color: #fff;
        }

        .other-products h3 {
            text-align: center;
            margin-bottom: 30px;
        }

        .other-products .product-card {
            margin-bottom: 20px;
        }

        .other-products .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .other-products .product-card .product-name {
            font-weight: bold;
            text-align: center;
        }

        /* Link Styling (Black and No Underline) */
        a {
            color: #333 !important;
            text-decoration: none !important;
        }

        a:hover {
            color: #333 !important;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .product-container {
                flex-direction: column;
                text-align: center;
            }

            .product-details {
                padding-left: 0;
                padding-top: 20px;
            }

            .product-image {
                max-width: 80%;
            }

            .navbar-content {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar">
    <div class="navbar-content">
        <a href="homepage.php">
            <img src="oclocks.png" alt="o'clocks Logo">
        </a>
        <span class="brand-name">o'clocks</span>
        <div class="cart-icon-container">
            <a href="cart.php" class="cart-link">
                <i class="fas fa-shopping-cart cart-icon"></i>
                <span id="cart-count" class="cart-count">0</span>
            </a>
        </div>
    </div>
</nav>

<!-- Product Section -->
<div class="container">
    <div class="product-container">
        <div>
            <img src="prod7.jpg" alt="Product Image" class="product-image">
        </div>
        <div class="product-details">
            <h2>Rolex Milgauss</h2>
            <p>The Rolex Milgauss is a uniquely designed watch showcasing a striking combination of rose gold accents and a refined brown clock face, blending innovation with elegance.</p>
            <p class="product-price">PHP 130,280.00</p>
        </div>
    </div>
</div>

<!-- Other Products Section -->
<div class="other-products">
    <h3>Other Products You May Like</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product12.php"><img src="prod1.jpg" alt="Product 1"></a>
                <div class="product-name">Cartier Baignoire</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product13.php"><img src="prod2.jpg" alt="Product 2"></a>
                <div class="product-name">Cartier Drive de Cartier</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product14.php"><img src="prod3.jpg" alt="Product 3"></a>
                <div class="product-name">Cartier Silver Delux Vintage</div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product15.php"><img src="prod4.jpg" alt="Product 4"></a>
                <div class="product-name">Casio Vintage</div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
