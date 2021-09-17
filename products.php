<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products</title>
    <?php include('head_style.php'); ?>
  </head>
<body class="innerpage">
<?php include('preload.php'); ?>
<?php $page='products'; include('header.php'); ?>
  <div id="services" class="our-services section">
    <div class="services-right-dec">
      <img src="assets/images/services-right-dec.png" alt="">
    </div>
    <div class="container">
     <!-- <div class="services-left-dec">
        <img src="assets/images/services-left-dec.png" alt="">
      </div> -->
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Our <em>Featured </em> <span><br> Products  </span></h2>
            <span>PRODUCTS</span>
          </div>
          <p class="text-center">We have displayed our few most popular products...</p>
           </div>
      </div>
    </div>
  </div>
  
  <div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="assets/images/portfolio-left-dec.png" alt="">
    </div>
    <?php include('productlist.php'); ?>
  </div>
<?php include('footer.php'); ?>
</body>
</html>