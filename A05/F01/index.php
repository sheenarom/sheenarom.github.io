<?php
session_start();

$_SESSION;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympic Official Store</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="popup.css">
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    
   <section id="header">
        <a href="index.php"><img src="image/Olympics-logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Log-in</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
   </section>

   <section id="hero">
        <h4>Shop Smart, Buy Now!</h4>
        <h2>Your Order, Our Priority</h2>
        <h1>Click, Shop, Delivered</h1>
   </section>

   <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Olympics Collection</p>
    <div class="pro-container">
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='userwinterparka.php';"> 
                <img src="image/products/Womenjacket.png" alt="Uniqlo Winter Parka">
                <div class="desc">
                    <span> Uniqlo </span> 
                    <h5> Women Jacket </h5> 
                    <div class="star"> 
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4> ₱1,999.00 </h4> 
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='userwhitepolo.php';"> 
                <img src="image/products/LAmenshirt.png" alt="White Old Navy Short Sleeves Polo">
                <div class="desc">
                    <span> T-Shirt </span> 
                    <h5> White Mens Shirt </h5> 
                    <div class="star"> 
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4> ₱499.00 </h4> 
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='userpenshoppetshirt.php';">
                <img src="image/products/BlueShirt.png" alt="">
                <div class="desc">
                    <span>T-shirt</span>
                    <h5>Olympics BlueT-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₱499.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='useroriginaltshirt.php';"> 
                <img src="image/products/Croptop.png" alt="">
                <div class="desc">
                    <span>RRJ</span>
                    <h5>Original Blue T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₱499.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
                </div>
        </div>
    </section>

    <footer class="section-p1">
    <div class="column">
        <img class="logo" src="image/Olympics-logo.png" alt="">
        <h4>Contact</h4>
        <p><strong>Address:</strong> CCF Mount Makiling Recreation Center San Bartolome, Santo Tomas, 4234 Batangas</p>
        <p><strong>Phone:</strong> +63 992 427 8268</p>
        <p><strong>Hours:</strong> 8:00 AM - 10:00 PM, Mon - Fri</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <a href="https://www.facebook.com/share/17cceubVgc/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/shinahrom?igsh=MW5qNHhxODR6dmhlcQ==">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="column">
        <h4>About</h4>
        <a href="about.php">About Us</a>
        <a href="#" onclick="openPopup('delivery')">Delivery Information</a>
        <a href="#" onclick="openPopup('privacy')">Privacy Policy</a>
        <a href="#" onclick="openPopup('terms')">Terms &amp; Conditions</a>
        <a href="contact.php">Contact Us</a>
    </div>

    <div class="column">
        <h4>My Account</h4>
        <a href="login.php">Sign In</a>
        <a href="cart.php">View Cart</a>
    </div>
</footer>

<div class="popup-overlay" id="popup-overlay">
    <div class="popup-content" id="popup-content">
        <h2 id="popup-title"></h2>
        <p id="popup-text"></p>
        <button class="popup-button" onclick="closePopup()">Close</button>
    </div>
</div>



    <script src="script.js"></script>
    <script src="popup.js"></script>
</body>
</html>
