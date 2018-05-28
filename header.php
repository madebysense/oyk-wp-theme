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
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta property="og:title" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/main.min.css">
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css">
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
<nav class="header-menu">
  <div class="container">
    <?php wp_nav_menu(array('the_location'=>'menu'));?>
  </div>
</nav>