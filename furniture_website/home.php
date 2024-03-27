<?php
    include 'header.php';
?>
  <!-- header section ends -->

  <!-- closer btn -->
 

  <!-- home section starts  -->
  <section class="home">
    <div class="slides-container">

      <div class="slide active">
        <div class="content">
          <span>new arrivals</span>
          <h3>flexible chair</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quisquam, magnam enim sed debitis perspiciatis.</p>
          <a href="#" class="btn">shop now</a>
        </div>
        <div class="image">
          <img src="image/home-img-1.png" alt="">
        </div>
      </div>

      <div class="slide">
        <div class="content">
          <span>new arrivals</span>
          <h3>flexible chair</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quisquam, magnam enim sed debitis perspiciatis.</p>
          <a href="#" class="btn">shop now</a>
        </div>
        <div class="image">
          <img src="image/home-img-2.png" alt="">
        </div>
      </div>

    </div>

    <div id="slide-next" class="fas fa-angle-right" onclick="next()"></div>
    <div id="slide-prev" class="fas fa-angle-left" onclick="prev()"></div>
  </section>
  <!-- home section ends -->

  <!-- banner section starts  -->
  <section class="banner-container">

    <div class="banner">
      <img src="image/banner-1.jpg" alt="">
      <div class="content">
        <span>limited offer</span>
        <h3>upto 50% off</h3>
        <a href="#" class="btn">shop now</a>
      </div>
    </div>

    <div class="banner">
      <img src="image/banner-2.jpg" alt="">
      <div class="content">
        <span>limited offer</span>
        <h3>upto 50% off</h3>
        <a href="#" class="btn">shop now</a>
      </div>
    </div>

    <div class="banner">
      <img src="image/banner-3.jpg" alt="">
      <div class="content">
        <span>limited offer</span>
        <h3>upto 50% off</h3>
        <a href="#" class="btn">shop now</a>
      </div>
    </div>

  </section>
  <!-- banner section ends -->







  <!-- footer section  -->
  <?php
      include 'footer.php';
  ?>