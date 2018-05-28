<?php
/*
Template Name: Ana sayfa
*/
?>

<?php get_header(); ?>

<section class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <?php if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
            the_content();
            ?>
          <?php endwhile; else: ?>
          <p><?php _e('Sonuç Bulunamadı.'); ?></p>
        <?php endif; ?>
      </div>
      <div class="col-md-5">
        <div class="calendar">
          <div class="calendar-title">Takvim</div>
          <div class="calendar-content">
            <div class="calendar-content-block">
              <div class="calendar-content-block-title">
                Eğitimlerin Belirlenmesi
              </div>
              <div class="calendar-content-block-desc">
                01 - 10 Haziran
              </div>
            </div>
            <div class="calendar-content-block course">
              <div class="calendar-content-block-title">
                Katılımcı Başvuruları
              </div>
              <div class="calendar-content-block-desc special-date">
                15 - 30 Haziran
              </div>
            </div>
            <div class="calendar-content-block course">
              <div class="calendar-content-block-title">
                1. Tur Yerleştirmeler
              </div>
              <div class="calendar-content-block-desc special-date">
                1 - 10 Temmuz
              </div>
            </div>
            <div class="calendar-content-block course">
              <div class="calendar-content-block-title">
                2. Tur Yerleştirmeler
              </div>
              <div class="calendar-content-block-desc special-date">
                10 - 18 Temmuz
              </div>
            </div>
            <div class="calendar-content-block">
              <div class="calendar-content-block-title">
                KAMP
              </div>
              <div class="calendar-content-block-desc special-date">
                20 Temmuz - 4 Ağustos
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
