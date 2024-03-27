<?php
    include 'header.php';
?>
  <!-- header section ends -->

  <!-- closer btn -->
  <div id="closer" class="fas fa-times"></div>

  <!-- navbar -->
  <nav class="navbar">
    <a href="home.html">home</a>
    <a href="shop.html">shop</a>
    <a href="about.html">about</a>
    <a href="team.html">team</a>
    <a href="blog.html">blog</a>
    <a href="contact.html">contact</a>
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

  <section class="heading">
    <h3>our shop</h3>
    <p><a href="home.html">home</a> / <span>about</span></p>
  </section>

  <section class="about">

    <div class="image">
      <img src="image/about-img.jpg" alt="">
    </div>

    <div class="content">
      <span>welcome to our shop</span>
      <h3>we make your home more astonishing</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam officiis, reiciendis veniam incidunt architecto quam velit dolorum exercitationem cum aliquam ab quas dicta dolores ad earum quasis.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente adipisci totam, nam voluptates quis delectus. Ea quo repudiandae.</p>
      <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
      <img src="image/serv-1.svg" alt="">
      <h3>product selling</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quis recusandae, repellendus sint dolore reprehenderit, rem ducimus aut quae iusto veritatis cupiditate neque facilis omnis dignissimos veniam voluptatibus ut perferendis!</p>
      <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
      <img src="image/serv-2.svg" alt="">
      <h3>product selling</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quis recusandae, repellendus sint dolore reprehenderit, rem ducimus aut quae iusto veritatis cupiditate neque facilis omnis dignissimos veniam voluptatibus ut perferendis!</p>
      <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
      <img src="image/serv-3.svg" alt="">
      <h3>product selling</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quis recusandae, repellendus sint dolore reprehenderit, rem ducimus aut quae iusto veritatis cupiditate neque facilis omnis dignissimos veniam voluptatibus ut perferendis!</p>
      <a href="#" class="btn">read more</a>
    </div>

  </section>







  <!-- footer section  -->
  <?php
      include 'footer.php';
  ?>