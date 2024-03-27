<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- custom css file linke -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- header section starts -->
  <header class="header">
    <a href="home.php" class="logo"><i class="fas fa-lightbulb"></i>furni</a>

    <form action="" class="search-form">
      <input type="search" placeholder="serch here..." id="search-box">
      <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <div id="search-btn" class="fas fa-search"></div>
      <div id="cart-btn" class="fas fa-shopping-cart"></div>
      <div id="login-btn" class="fas fa-user"></div>
    </div>
  </header>
  <div id="closer" class="fas fa-times"></div>

<!-- navbar -->
<nav class="navbar">
  <a href="home.php">home</a>
  <a href="shop.php">shop</a>
  <a href="about.php">about</a>
  <a href="team.php">team</a>
  <a href="blog.php">blog</a>
  <a href="contact.php">contact</a>
</nav>

<div class="shopping-cart">
  
  <div class="box">
    <i class="fas fa-times"></i>
    <img src="image/cart-img-1.jpg" alt="">
    <div class="content">
      <h3>morden furniture</h3>
      <span class="quantity"> 1 </span>
      <span class="multiplay"> x </span>
      <span class="price"> $140.00 </span>
    </div>
  </div>
  
  <div class="box">
    <i class="fas fa-times"></i>
    <img src="image/cart-img-2.jpg" alt="">
    <div class="content">
      <h3>morden furniture</h3>
      <span class="quantity"> 1 </span>
      <span class="multiplay"> x </span>
      <span class="price"> $140.00 </span>
    </div>
  </div>
  
  <div class="box">
    <i class="fas fa-times"></i>
    <img src="image/cart-img-3.jpg" alt="">
    <div class="content">
      <h3>morden furniture</h3>
      <span class="quantity"> 1 </span>
      <span class="multiplay"> x </span>
      <span class="price"> $140.00 </span>
    </div>
  </div>
  
  <div class="box">
    <i class="fas fa-times"></i>
    <img src="image/cart-img-4.jpg" alt="">
    <div class="content">
      <h3>morden furniture</h3>
      <span class="quantity"> 1 </span>
      <span class="multiplay"> x </span>
      <span class="price"> $140.00 </span>
    </div>
  </div>

  <h3 class="total"> total : <span> $560.00 </span></h3>
</div>

<!-- login form  -->
<div class="login-form">

  <form action="">
    <h3>login form</h3>
    <input type="email" placeholder="enter your email" class="box">
    <input type="password" placeholder="enter your password" class="box">
    <div class="remember">
      <input type="checkbox" name="" id="remember-me">
      <label for="remember-me">remember me</label>
    </div>
    <input type="submit" value="login now" class="btn">
    <p>forget password? <a href="#">click here</a></p>
    <p>don't have an account? <a href="#">create now</a></p>
  </form>

</div>