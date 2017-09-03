<?php
$tags          = wp_get_post_tags( $post->ID, array( 'order' => 'ASC', 'fields' => 'ids' ) );
$terms         = wp_get_post_terms( $post->ID, 'categorie' );
$firstTerm     = isset( $terms[0] ) ? $terms[0] : false;
$firstTermSlug = isset( $firstTerm->slug ) ? $firstTerm->slug : false;

wp_reset_postdata();
$args      = array(
	'tag__in'        => $tags,
	'tax_query'      => array(
		array(
			'taxonomy' => 'categorie',
			'field'    => 'slug',
			'terms'    => $firstTermSlug,
		),
	),
	'post__not_in'   => array( $post->ID ),
	'post_type'      => 'eos_themes_posts',
	'posts_per_page' => 3,
	'orderby'        => 'rand'
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	$output = '<h2 class="related-post-title">Références similaires</h2>';
	$output .= '<div id="related-wrapper">';
	$output .= '<div class="pure-g">';

	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$output .= '<div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-4">';
		$output .= '<div class="card card-xs">';
		$output .= '<a href="' . get_the_permalink() . '" class="card-thumb" style="background-image: url(' . get_the_post_thumbnail_url() . ');">';
		$output .= '<span>' . get_the_title() . '</span>';
		$output .= '</a>';
		$output .= '</div>';
		$output .= '</div>';
	}

	$output .= '<div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-4">';
	$output .= '<div class="card card-xs">';
	$output .= '<a href="' . esc_url( get_permalink( get_page_by_title( 'contact' ) ) ) . '" class="card-thumb contact-card">';
	$output .= '<span>Nous <br /> contacter</span>';
	$output .= '</a>';
	$output .= '</div>';
	$output .= '</div>';

	$output .= '</div>';
	$output .= '</div>';
	/* Restore original Post Data */
	wp_reset_postdata();

	echo $output;
}


?>