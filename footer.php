<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="footer-widget twitter-widget">
          <h2>Son Tweetler</h2>
          <?php echo do_shortcode("[custom-twitter-feeds]"); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="footer-widget social-media">
          <h2>Sosyal Medya Hesapları</h2>
          <ul>
            <li>
              <a href="https://www.facebook.com/ozguryazilimkampi" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="https://twitter.com/ozguryazkampi" target="_blank"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="https://www.instagram.com/ozguryazilimkampi/" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
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