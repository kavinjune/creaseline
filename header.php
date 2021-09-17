<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/logo.jpg" style="width: 175px;" >
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php" class="<?php if($page=='home'){echo 'active';}?>">Home</a></li>
              <li class="scroll-to-section"><a href="about.php" class="<?php if($page=='about'){echo 'active';}?>">About Us</a></li>
              <li class="scroll-to-section"><a href="products.php" class="<?php if($page=='products'){echo 'active';}?>">Products</a></li>
              <li class="scroll-to-section"><a href="contact.php" class="<?php if($page=='contact'){echo 'active';}?>">Contact Us</a></li> 
              <li class="scroll-to-section"><div class="main-red-button-hover">
              <a href="#" data-toggle="modal" data-target="#modalContactForm">Enquiry</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Submit your Enquiry!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
         <label for="name">Name</label>
         <input type="text" name="name" class="form-control validate">
        </div>

        <div class="md-form mb-5">
        <label for="email">Email Address</label>
         <input type="email" name="email" class="form-control validate">
        </div>

        <div class="md-form mb-5">
        <label for="phone">Phone</label>
         <input type="tel" name="phone" class="form-control validate">
        </div>

        <div class="md-form">
        <label for="query">Enter Your Query</label>
         <textarea name="query" id="query" cols="30" rows="10" class="form-control validate"></textarea>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="query">Submit Your Query!</button>
      </div>
    </div>
  </div>
</div>