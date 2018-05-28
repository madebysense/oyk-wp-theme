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
      <div class="">
        <div class="calendar">
        <table class="table">
            <thead class="calendar-title">
              <tr>
                <th colspan="2" class="text-center">Takvim</th>
              </tr>
            </thead>
            <tbody>
              <tr class="passed">
                <td class="calendar-date-title">Eğitimlerin Belirlenmesi</td>
                <td>01 - 10 Haziran</td>
              </tr>
              <tr class="current">
                <td class="calendar-date-title">Katılımcı Başvuruları</td>
                <td>15 - 30 Haziran</td>
              </tr>
              <tr>
                <td class="calendar-date-title">1. Tur Yerleştirmeler</td>
                <td>1 - 10 Temmuz</td>
              </tr>
              <tr>
                <td class="calendar-date-title">2. Tur Yerleştirmeler</td>
                <td>10 - 18 Temmuz</td>
              </tr>
              <tr>
                <td class="calendar-date-title">KAMP</td>
                <td>20 Temmuz - 4&nbsp;Ağustos</td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
