<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
 

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>


	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php my_excerpt(30) ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
