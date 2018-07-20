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
      <div class="col-md-4">
        <div class="footer-widget">
          <h2>Ana Sponsor</h2>
          <div class="col-xs-6 main-sponsor text-center" style="background: #fff;border:1px solid #fff;border-radius: 5px;padding:15px;margin-bottom: 15px;">
            <a href="https://fundrequest.io" target="_blank" title="Ana Sponsor: FundRequest">
              <img src="<?php bloginfo("template_url"); ?>/assets/images/destekleyen-kurumlar/FundRequest-logo.svg" alt="FundRequest" class="img-responsive">
            </a>
          </div>
        </div>
      </div>
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