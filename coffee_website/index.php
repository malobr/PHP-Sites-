<?php
    include 'header.php';
?>
  <!-- header section ends   -->

  <!-- home section starts -->
  <div class="home-bg">

    <section class="home" id="home">

      <div class="content">
        <h3>coffee heaven</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut officia, accusantium mollitia laudantium dolorum dolore.</p>
        <a href="#about" class="btn">about us</a>
      </div>

    </section>

  </div>
  <!-- home section ends -->

  <!-- about section starts -->
  <section class="about" id="about">

    <div class="image">
      <img src="images/about-img.svg" alt="">
    </div>

    <div class="content">
      <h3>A cup of coffee can complete your day</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam suscipit sunt repellendus, dolorum recusandae placeat quae. Iste eaque aspernatur, animi deleniti voluptas, sunt molestias eveniet sint consectetur facere a ex.</p>
      <a href="#menu" class="btn">our menu</a>
    </div>

  </section>
  <!-- about section ends -->

  <!-- facility section starts -->
  <section class="facility">

    <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>our facility</h3>
    </div>

    <div class="box-container">

      <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>varieties of coffees</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci!</p>
      </div>

      <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>coffee beans</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci!</p>
      </div>

      <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>breakfast and sweets</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci!</p>
      </div>

      <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>read to go coffee</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci!</p>
      </div>

    </div>

  </section>
  <!-- facility section ends -->

  <!-- menu section starts -->
  <section class="menu" id="menu">

    <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>popular menu</h3>
    </div>

    <div class="box-container">

      <div class="box">
        <img src="images/menu-1.png" alt="">
        <h3>love you coffee</h3>
      </div>

      <div class="box">
        <img src="images/menu-2.png" alt="">
        <h3>Cappuccino</h3>
      </div>

      <div class="box">
        <img src="images/menu-3.png" alt="">
        <h3>Mocha coffee</h3>
      </div>

      <div class="box">
        <img src="images/menu-4.png" alt="">
        <h3>Frappuccino</h3>
      </div>

      <div class="box">
        <img src="images/menu-5.png" alt="">
        <h3>black coffee</h3>
      </div>

      <div class="box">
        <img src="images/menu-6.png" alt="">
        <h3>love heart coffee</h3>
      </div>

    </div>

  </section>
  <!-- menu section ends -->

  <!-- gallery section starts -->
  <section class="gallery" id="gallery">

    <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>our gallery</h3>
    </div>

    <div class="box-container">
      <img src="images/gallery-1.webp" alt="">
      <img src="images/gallery-2.webp" alt="">
      <img src="images/gallery-3.webp" alt="">
      <img src="images/gallery-4.webp" alt="">
      <img src="images/gallery-5.webp" alt="">
      <img src="images/gallery-6.webp" alt="">
    </div>

  </section>
  <!-- gallery section ends -->

  <!-- team section starts -->
  <section class="team" id="team">

    <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>out team</h3>
    </div>

    <div class="box-container">

      <div class="box">
        <img src="images/our-team-1.jpg" alt="">
        <h3>john deo</h3>
      </div>
      <div class="box">
        <img src="images/our-team-2.jpg" alt="">
        <h3>john deo</h3>
      </div>
      <div class="box">
        <img src="images/our-team-3.jpg" alt="">
        <h3>john deo</h3>
      </div>
      <div class="box">
        <img src="images/our-team-4.jpg" alt="">
        <h3>john deo</h3>
      </div>
      <div class="box">
        <img src="images/our-team-5.jpg" alt="">
        <h3>john deo</h3>
      </div>
      <div class="box">
        <img src="images/our-team-6.jpg" alt="">
        <h3>john deo</h3>
      </div>

    </div>

  </section>
  <!-- team section ends -->

  <!-- contact section starts -->
  <section class="contact" id="contact">

    <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>contact us</h3>
    </div>

    <div class="row">

      <div class="image">
        <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
        <h3>book a table</h3>
        <input type="text" name="name" id="" required class="box" maxlength="20" placeholder="enter your name">
        <input type="number" name="number" id="" required class="box" maxlength="20" placeholder="enter your number" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false">
        <input type="number" name="guests" id="" required class="box" maxlength="20" placeholder="how many guests" min="0" max="99" onkeypress="if(this.value.length == 2) return false">
        <input type="submit" value="send message" class="btn">
      </form>

    </div>

  </section>
  <!-- contact section ends -->

  <!-- footer section starts -->
  <?php
      include 'footer.php';
  ?>