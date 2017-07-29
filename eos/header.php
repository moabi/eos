<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>"/>
  <link id="page_favicon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="icon" type="image/x-icon" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11"/>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<div id="bgcolors">
  <div id="page" class="hfeed">
    <div id="page_gd">
      <header id="branding" role="banner">
          <div id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" rel="home"><img
                  src="<?php bloginfo( 'template_url' ); ?>/img/logo_wth_halo.png"
                  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/></a>
          </div>
        <nav id="access" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
          <div id="hamburger" class="toggleMenu" data-target="#secondary">
            Menu
            <div class="ham-ico">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
          </div>
        </nav>
        <!-- #access -->
      </header>
      <!-- #branding -->

      <div id="main">