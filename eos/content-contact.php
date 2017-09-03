<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2">
        <header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header><!-- .entry-header -->
        <div id="contact_content">
			<?php the_content(); ?>
          <div id="mapp">
            <div id="map_canvas"></div>
          </div>
        </div>
      </div>
      <div class="pure-u-1 pure-u-md-1-2">
        <div id="contact-form">
			<?php echo do_shortcode( '[contact-form-7 id="10" title="Contact form 1"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->


