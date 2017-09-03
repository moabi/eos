<?php
/**
 * Template Name: Reference Tags
 * Description: A Page Template that list custom post filtered by tag
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<?php
global $post;
$post_slug = $post->post_name;
?>

<section id="primary" class="reference-tag-php archive-php">
  <div id="content" role="main">

	  <?php
	  $args_terms = array(
		  'taxonomy'   => 'categorie',
		  'hide_empty' => true,
	  );
	  $terms      = get_terms( $args_terms );
	  if ( $terms ) {

//	    echo '<div id="term-filtering">';
//	    echo '<div class="pure-g">';
//    foreach ( $terms as $term ) {
//	    $image_id = get_term_meta( $term->term_id, 'image', true );
//	    $image_data = wp_get_attachment_image_src( $image_id, 'full' );
//	    $image = $image_data[0];
//	    if ( ! empty( $image ) ) {
//	      echo '<div class="pure-u-1-6">';
//		    echo '<span><img class="svg-term" src="' . esc_url( $image ) . '" /></span>';
//	      echo '</div>';
//	    }
//
//    }
//	    echo '</div>';
//	    echo '</div>';
	    $i = 1;
	    echo '<div class="pure-g">';
		  foreach ( $terms as $term ) {
		  $custom_query = new WP_Query(
			  array(
				  'tag'            => $post_slug,
				  'tax_query'      => array(
					  array(
						  'taxonomy' => 'categorie',
						  'field'    => 'slug',
						  'terms'    => $term->slug,
					  ),
				  ),
				  'posts_per_page' => 12,
				  'post_type'      => 'eos_themes_posts'
			  )
		  );

			  if ( $custom_query->have_posts() ) :

				  // image id is stored as term meta
				  $image_id     = get_term_meta( $term->term_id, 'image', true );
				  $image_data   = wp_get_attachment_image_src( $image_id, 'full' );
				  $image        = $image_data[0];
		    $initClass  = ( $i == 1 ) ? 'init-term' : '';
		    $initHeader = ( $i == 1 ) ? 'active' : '';
		    echo '<div class="pure-u-1-3 pure-u-md-1-6">';
		    echo '<header class="js-filter ' . $initHeader . '" data-filter="filter-' . $term->slug . '">';
				  if ( ! empty( $image ) ) {
					  echo '<img class="svg-term" src="' . esc_url( $image ) . '" />';
				  }
		    echo '<h2 class="term-title " >' . $term->name .
		         '</h2> ';
		      echo '</header>';
		    echo '</div>';
		    echo '<div id="filter-' . $term->slug . '" class="hidden ' . $initClass . '">';
				  echo '<div class="pure-g">';
				  while ( $custom_query->have_posts() ) : $custom_query->the_post();
					  get_template_part( 'content', 'archive' );
				  endwhile;
				  echo '</div>';
		    echo '</div>';
		    $i ++;
			  endif;


	  }
	    echo '</div>';

	    echo '<div id="active-term"></div>';
	  }

    ?>
  </div><!-- #content -->
</section><!-- #primary -->

<?php get_footer(); ?>
