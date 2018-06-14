<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>
  <?php
    global $page, $paged;
    wp_title( '|', true, 'right' );
    bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
      echo " | $site_description";
    if ( $paged >= 2 || $page >= 2 )
      echo ' | ' . sprintf( _( 'Page %s', 'sipsi' ), max( $paged, $page ) );n
    ?>
  </title>
  <meta charset="UTF-8">
  <meta name="description" content="Mustafa Akgül Özgür Yazılım Yaz Kampı 2018 20 Temmuz-4 Ağustos tarihleri arasında Bolu Abant İzzet Baysal Üniversitesinde. Başvurular 15-30 Haziran tarihlerinde.">
  <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?>" />
  <meta property="og:description" content="Mustafa Akgül Özgür Yazılım Yaz Kampı 2018 20 Temmuz-4 Ağustos tarihleri arasında Bolu Abant İzzet Baysal Üniversitesinde. Başvurular 15-30 Haziran tarihlerinde." />
  <meta property="og:url" content="<?=home_url( $wp->request )?>" />
  <meta property="og:image" content="<?php bloginfo("template_url"); ?>/assets/images/ozgur-yazilim-yaz-kampi-2018.jpg" />
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/main.min.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css">
  <link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/assets/images/favicon.png" />
  <?php wp_head(); ?>
</head>

<body>

<header>
  <div class="container">
    <div class="row">
      <div class="header-logo col-md-6 col-xs-12">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo("template_url"); ?>/assets/images/lyk-logo.png" alt=""></a>
      </div>
      <div class="header-logo-list col-md-6 col-xs-12">
        <div class="pull-right pull-right-xs">
          <a href="http://www.lkd.org.tr/" target="_blank">
            <img src="<?php bloginfo("template_url"); ?>/assets/images/lkd.png" height="120" width="120" alt="">
          </a>
          <a href="http://www.ibu.edu.tr/tr" target="_blank">
            <img src="<?php bloginfo("template_url"); ?>/assets/images/izzet-baysal.png" alt="">
          </a>
          <a href="https://www.pardus.org.tr/" target="_blank">
            <img src="<?php bloginfo("template_url"); ?>/assets/images/parsus.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
<nav class="header-menu hidden-xs">
  <div class="container">
    <?php wp_nav_menu( array( 'theme_location' => 'menu', 'items_wrap' => '<ul id="menu-header">%3$s</ul>', 'menu_id' => 'menu-header')); ?>
  </div>
</nav>