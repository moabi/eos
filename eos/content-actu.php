<?php
/**
 * The template for Actualités
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
		<?php the_content(); ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="clearfix"></div>
	
		
		<?php endif; ?>
		
		<?php
		// wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
