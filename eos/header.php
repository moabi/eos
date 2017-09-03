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
  <style>
    body, p, textarea, input {
      font-family: <?php echo get_field('body_font','options'); ?>;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: <?php echo get_field('header_font','options'); ?>;
    }
  </style>
</head>
<?php
if(is_front_page()):
    $img_uri =  get_field('home_bg','options');
	$img_bg = 'background-image:url('.$img_uri.');';
else:
    $img_bg = '';
endif;
?>
<body <?php body_class(); ?> style="<?php echo $img_bg; ?>">

<div id="bgcolors">
  <div id="page" class="hfeed">
    <div id="page_gd">
      <header id="branding" role="banner">
        <div class="pure-g">
          <div class="pure-u-7-24">
            <div id="logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                 rel="home">
                <img src="<?php echo get_field( 'logo', 'options' ); ?>"
                     alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
              </a>
            </div>
          </div>

          <div class="pure-u-17-24">

            <nav id="access" role="navigation">
              <div id="phone">
                <span>
                  <?php if ( get_field( 'phone_link', 'options' ) ){ ?>
                  <a onclick="ga('send', 'event', 'Phone', 'click', 'on site CTA');"
                     href="tel:<?php echo get_field( 'phone_link', 'options' ); ?>"><?php } ?>
	                  <?php echo get_field( 'phone', 'options' ); ?>
	                  <?php if ( get_field( 'phone_link' ) ){ ?></a><?php } ?>
                </span>
              </div>
		        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
            <div id="mobile-menu"><span>MENU</span></div>
          </div>
        </div>
      </header>
      <!-- #branding -->
      <div id="main">