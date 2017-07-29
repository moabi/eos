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
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	
	</header><!-- .entry-header -->
	<div class="entry-content">
	
	
	<div id="contact_content">	<?php the_content(); ?></div>
		<div id="mapp">

	
	<div id="map_canvas" style="width:340px; height:230px"></div>

	
	</div>
		<div class="clearfix"></div>
		
		<?php echo do_shortcode( '[contact-form-7 id="10" title="Contact form 1"]' ); ?>
		
		
		
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->


