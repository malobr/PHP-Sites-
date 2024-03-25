<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
            <a href="#" class="logo">
                <img src="https://cdn.pixabay.com/photo/2019/05/14/13/22/coffee-4202377_640.png" alt="" srcset="">
            </a>

            <nav class="navbar">
                <a href="#">home</a>
                <a href="#about">about</a>
                <a href="#menu">menu</a>
                <a href="#products">products</a>
                <a href="#review">review</a>
                <a href="#contact">contact</a>
                <a href="#blogs">blogs</a>
            </nav>
                <div class="icons">
                    <div class="fas fa-search" id="search"></div>
                    <div class="fas fa-shopping-cart" id="cart-btn"></div>
                    <div class="fas fa-bars" id="menu-btn"></div>
                </div>

                <div class="search-form">
                    <input type="text" placeholder="Search..." id="search-box"/>
                    <label for="seach-box" class="fas fa-search" ></label>
                </div>

                <div class="card-items-container">
                    <div class="card-item">
                        <span class="fas fa-times"></span>
                        <img class="shop-img" src="images/coffee-1.png" alt="" srcset="">
                        <div class="content">
                            <h3>card item 01</h3>
                            <div class="price">$15.99/- </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <span class="fas fa-times"></span>
                        <img class="shop-img" src="images/coffee-2.png" alt="" srcset="">
                        <div class="content">
                            <h3>card item 02</h3>
                            <div class="price">$15.99/- </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <span class="fas fa-times"></span>
                        <img class="shop-img" src="images/coffee-3.png" alt="" srcset="">
                        <div class="content">
                            <h3>card item 03</h3>
                            <div class="price">$15.99/- </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <span class="fas fa-times"></span>
                        <img class="shop-img" src="images/coffee-4.png" alt="" srcset="">
                        <div class="content">
                            <h3>card item 04</h3>
                            <div class="price">$15.99/- </div>
                        </div>
                    </div>
                    <a href="#" class="btn" >Checkout now</a>
                </div>

        </header>
        <script src="app.js"></script>
</body>
</html>