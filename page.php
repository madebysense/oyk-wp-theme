<?php get_header(); ?>

<div class="page">
  <div class="container">
    <div class="row">
      <article class="page-content col-md-8">
        <h1 class="page-content-title"><?php the_title(); ?></h1>
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; else: ?>
          <p><?php _e('Sonuç Bulunamadı.'); ?></p>
          <?php endif; ?>
      </article>
      <aside class="page-sidebar col-md-4">
        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</div>

<?php get_footer(); ?>
