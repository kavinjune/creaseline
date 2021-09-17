
  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="about footer-item">
            <div class="logo">
              <a href="#"><img src="assets/images/logo.jpg" style="width:150px;" alt=""></a>
            </div>
            <a href="mailto:creaselinetechnologies@ gmail.com">creaselinetechnologies@ gmail.com</a>
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="services footer-item">
            <h4>Reach Us</h4>
			<p>
			SF.No 512, Nandavan Thottam, <br>
Near Prabavi Garden, Maniyakarampalayam, <br>
Ganapathy,Coimbatore - 641006.<br>
Mobile : 96777 32948
			</p>
          </div>
        </div>
		<div class="col-lg-4">
          <div class="community footer-item">
            <h4>About Creaseline Technologies</h4>
            <p>Established in 2010, We are pecialized in manufacturing Hardcase Binding Machines such as Automatic case maker, casing in and joint forming and finishing, Paper Converting Machines etc.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p>Copyright © <?php echo date('Y'); ?> Creaseline Technologies. All Rights Reserved. 
          </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>