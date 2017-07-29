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

<?php 
$product_terms = wp_get_object_terms($post->ID, 'categorie');
if(!empty($product_terms)){
  if(!is_wp_error( $product_terms )){
    echo '<ul id="cat-brd">';
    foreach($product_terms as $term){
      echo '<li id="'.htmlspecialchars($term->slug).'"><a href="'.get_term_link($term->slug, 'categorie').'">'.$term->name.'</a></li>'; 
    }
    echo '</ul>';
  }
}

?>


	<header class="entry-header">
		<h1 class="entry-title"><span id="square"></span><?php the_title(); ?></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php twentyeleven_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
