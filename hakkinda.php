<?php
/*
Template Name: Hakkında
*/
?>

<?php get_header(); ?>
<section class="page about">
  <div class="container">
    <div class="row">
      <div class="about-text col-md-6 col-sm-6 col-xs-12">
        <h1><?php the_title(); ?></h1>
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
        <?php if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
            the_content();
            ?>
          <?php endwhile; else: ?>
          <p><?php _e('Sonuç Bulunamadı.'); ?></p>
        <?php endif; ?>
      </div>
      <div class="about-image col-xs-9 col-md-push-2 col-xs-push-1 col-md-3 col-sm-6 col-sm-push-0">
        <img src="<?php bloginfo("template_url"); ?>/assets/images/lyk2018logo.png" alt="">
      </div>
    </div>
  </div>
</section>

<section class="past-years">
  <div class="container">
    <div class="row">
      <div class="past-years-slider col-md-6 col-xs-12 col-sm-5">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <a data-fancybox="gallery" href="<?php bloginfo("template_url"); ?>/assets/images/lyk-slider.jpg"><img src="<?php bloginfo("template_url"); ?>/assets/images/lyk-slider.jpg"></a>
          </div>
          <div class="item">
            <a data-fancybox="gallery" href="<?php bloginfo("template_url"); ?>/assets/images/lyk-slider.jpg"><img src="<?php bloginfo("template_url"); ?>/assets/images/lyk-slider.jpg"></a>
          </div>
          <div class="item">
            <a data-fancybox="gallery" href="<?php bloginfo("template_url"); ?>/assets/images/lyk-slider.jpg"><img src="<?php bloginfo("template_url"); ?>/assets/images/lyk-slider.jpg"></a>
          </div>
          <div class="item">
            <a data-fancybox="gallery" href="<?php bloginfo("template_url"); ?>/assets/images/lyk-slider.jpg"><img src="<?php bloginfo("template_url"); ?>/assets/images/lyk-slider.jpg"></a>
          </div>
          <div class="item">
            <a data-fancybox="gallery" href="<?php bloginfo("template_url"); ?>/assets/images/lyk-slider.jpg"><img src="<?php bloginfo("template_url"); ?>/assets/images/lyk-slider.jpg"></a>
          </div>
        </div>
      </div>
      <div class="past-years-list col-md-push-1 col-md-5 col-xs-12 col-sm-7">
        <h1>Geçmiş Yıllar</h1>
        <ul>
          <li><a href="http://kamp.linux.org.tr/2016/">Linux Yaz Kampı 2017</a> / Bolu Abant İzzet Baysal Üniversitesi</li>
          <li><a href="http://kamp.linux.org.tr/2016/">Linux Yaz Kampı 2016</a> / Bolu Abant İzzet Baysal Üniversitesi</li>
          <li><a href="http://kamp.linux.org.tr/2015/">Linux Yaz Kampı 2015</a> / Bolu Abant İzzet Baysal Üniversitesi</li>
          <li><a href="http://kamp.linux.org.tr/2014/">Linux Yaz Kampı 2014</a> / Bolu Abant İzzet Baysal Üniversitesi</li>
          <li><a href="http://kamp.linux.org.tr/2013/">Linux Yaz Kampı 2013</a> / Bolu Abant İzzet Baysal Üniversitesi</li>
          <li><a href="http://kamp.linux.org.tr/2012/">Linux Yaz Kampı 2012</a> / Bolu Abant İzzet Baysal Üniversitesi</li>
          <li><a href="http://kamp.linux.org.tr/2011/">Linux Yaz Kampı 2011</a> / Düzce Üniversitesi</li>
          <li><a href="http://kamp.linux.org.tr/2010/">Linux Yaz Kampı 2010</a> / Işık Üniversitesi Şile Yerleşkesi</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
