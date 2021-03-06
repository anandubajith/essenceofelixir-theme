<!DOCTYPE html>
<html>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Slab' rel='stylesheet' type='text/css'>
  <title>
  <?php
  global $page, $paged;
  wp_title( '|', true, 'right' );
  // Add the blog name.
  bloginfo( 'name' );
  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
      echo " | $site_description";
  ?>
  </title>
  <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">
    <header class="site-header">
      <img src="/wp-content/uploads/2015/07/logo.png" alt="logo" />
      <h1>
        <a href="/">Essence of Elixir</a>
      </h1>
      <p>
        Drink, and become immortal.
      </p>
      <nav class="site-navigation">
        <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
      </nav><!-- .main -->
    </header>
