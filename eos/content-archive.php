<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<div class="pure-u-1-2 pure-u-md-1-4 pure-u-lg-1-6">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php twentyeleven_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

	<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
	<?php
  the_post_thumbnail();
  ?>
   </a>
   <?php
	} else {
	echo "<div class='nothumb'></div>";
	}
	?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>