<?php get_header(); ?>

<!-- Wp Loop -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sonuç Bulunamadı.'); ?></p>
<?php endif; ?>

<!-- Wp Loop -->

<div class="container">
  <h1><?php the_title(); ?></h1>
</div>

<?php get_footer(); ?>
