<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

    <div id="page">

      <a href="#content" class="skip-link screen-reader-text">
        <?php esc_html_e( 'Skip to content', 'wphierarchy' ); ?>
      </a>

      <header id="masthead" class="site-header" role="banner">

        <div class="site-branding">
          <p class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ) ;?>" rel="home">
              <?php bloginfo( 'name' ); ?>
            </a>
          </p>
          <p class="site-description" >
            <?php bloginfo( 'description' ); ?>
          </p>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
          <?php
            $args = [
              'theme_location' => 'main-menu'
            ];
            wp_nav_menu( $args );
          ?>
        </nav>

      </header>

      <div id="content" class="site-content">
