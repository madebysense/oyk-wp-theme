<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="twitter-widget">
          <h2>Twitter</h2>
          <?php echo do_shortcode("[custom-twitter-feeds]"); ?>
        </div>
      </div>
      <?php
      /**
      <div class="col-md-8">
          <h2 class="supporter-title">Sponsorlar</h2>
          <div class="footer-widget-supporter">
            <a class="supporter-list-item" href="#"><img src="<?php bloginfo("template_url"); ?>/assets/images/oyaslogo.png" alt=""></a>
            <a class="supporter-list-item" href="#"><img src="<?php bloginfo("template_url"); ?>/assets/images/hipo.png" alt=""></a>
            <a class="supporter-list-item" href="#"><img src="<?php bloginfo("template_url"); ?>/assets/images/blue.png" alt=""></a>
            <a class="supporter-list-item" href="#"><img src="<?php bloginfo("template_url"); ?>/assets/images/profiles.png" alt=""></a>
            <a class="supporter-list-item" href="#"><img src="<?php bloginfo("template_url"); ?>/assets/images/lab2023.png" alt=""></a>
          </div>
        </div>
      */
      ?>
    </div>
  </div>
</footer>

  <script src="<?php bloginfo("template_url"); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/assets/js/modernizr.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/assets/js/jquery.fancybox.min.js"></script>
  <script src="<?php bloginfo("template_url"); ?>/assets/js/main.min.js"></script>
  <?php wp_footer(); ?>
</body>
</html>