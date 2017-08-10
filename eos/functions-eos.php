<?php

class eos_themes_posts {

	function eos_themes_posts() {
		add_action( 'init', array( $this, 'create_post_type' ) );
	}

	function create_post_type() {
		$labels = array(
			'name'               => 'Références',
			'singular_name'      => 'Référence',
			'add_new'            => 'Nouvelle référence',
			'all_items'          => 'Toutes les références',
			'add_new_item'       => 'Ajouter une nouvelle référence',
			'edit_item'          => 'Editer réference',
			'new_item'           => 'Nouvelle référence',
			'view_item'          => 'Voir référence',
			'search_items'       => 'Rechercher une référence',
			'not_found'          => 'Non trouvé',
			'not_found_in_trash' => 'non trouvé dans la poubelle',
			'parent_item_colon'  => 'Thème parent',
			'menu_name'          => 'Références'
		);
		$args   = array(
			'labels'              => $labels,
			'description'         => "Ajouter vos références et classez-les dans les différentes catégories",
			'public'              => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_nav_menus'   => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'capability_type'     => 'post',
			'hierarchical'        => true,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt','tag' ),
	  'taxonomies'            => array( 'post_tag' ),
			'has_archive'         => true,
			'rewrite'             => array( 'slug' => 'references', 'with_front' => 'theme' ),
			'query_var'           => true,
			'can_export'          => true
		);
		register_post_type( 'eos_themes_posts', $args );
	}
}

$eos_themes_posts = new eos_themes_posts();


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


///////////////ADD TAXONOMY
/////////////////////////////////
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_eos_taxonomies', 0 );

//create two taxonomies, genres and writers for the post type "book"
function create_eos_taxonomies() {


	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Catégories', 'taxonomy general name' ),
		'singular_name'              => _x( 'Catégorie', 'taxonomy singular name' ),
		'search_items'               => __( 'Chercher' ),
		'popular_items'              => __( 'populaires' ),
		'all_items'                  => __( 'Tous' ),
		'parent_item'                => __( 'parent' ),
		'parent_item_colon'          => __( 'categories' ),
		'edit_item'                  => __( 'Editer' ),
		'update_item'                => __( 'Mettre a jour' ),
		'add_new_item'               => __( 'Nouveau' ),
		'new_item_name'              => __( 'Nouveau nom' ),
		'separate_items_with_commas' => __( 'Separate with commas' ),
		'add_or_remove_items'        => __( 'ajouter ou effacer' ),
		'choose_from_most_used'      => __( 'choisir les plus populaires' ),
		'menu_name'                  => __( 'Catégories' ),
	);

	register_taxonomy( 'categorie', 'eos_themes_posts', array(
		'hierarchical' => true,
		'labels'       => $labels,
		'show_ui'      => true,
		'query_var'    => true,
		'rewrite'      => array( 'slug' => 'categorie' ),
	) );
}


//limit excerpt lenght
class Excerpt {

	// Default length (by WordPress)
	public static $length = 55;

	// So you can call: my_excerpt('short');
	public static $types = array(
		'short'   => 25,
		'regular' => 55,
		'long'    => 100
	);

	/**
	 * Sets the length for the excerpt,
	 * then it adds the WP filter
	 * And automatically calls the_excerpt();
	 *
	 * @param string $new_length
	 *
	 * @return void
	 * @author Baylor Rae'
	 */
	public static function length( $new_length = 55 ) {
		Excerpt::$length = $new_length;

		add_filter( 'excerpt_length', 'Excerpt::new_length' );

		Excerpt::output();
	}

	// Tells WP the new length
	public static function new_length() {
		if ( isset( Excerpt::$types[ Excerpt::$length ] ) ) {
			return Excerpt::$types[ Excerpt::$length ];
		} else {
			return Excerpt::$length;
		}
	}

	// Echoes out the excerpt
	public static function output() {
		the_excerpt();
	}

}

// An alias to the class
function my_excerpt( $length = 55 ) {
	Excerpt::length( $length );
}


function new_excerpt_more( $more ) {
	global $post;

	return '<a href="' . get_permalink( $post->ID ) . '" class="readmore infn">' . __( 'Read more', 'twentyeleven' ) . '</a>';
}

add_filter( 'excerpt_more', 'new_excerpt_more' );

//register new menu
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'ref_menu' => 'Références',
			'footer_menu' => 'Footer'
		)
	);
}

//redirect if one post
function stf_redirect_to_post() {
	global $wp_query;
	// If there is one post on archive page
	if ( is_archive() && $wp_query->post_count == 1 ) {
		// Setup post data
		the_post();
		// Get permalink
		$post_url = get_permalink();
		// Redirect to post page
		wp_redirect( $post_url );
	}
}

add_action( 'template_redirect', 'stf_redirect_to_post' );


/**
 * Proper way to enqueue scripts and styles
 */
function themes_scripts() {
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), '3.2.1', true );
	wp_enqueue_script( 'custom_script',
		get_bloginfo( 'template_directory' ) . '/js/custom.min.js', array( 'jquery','royal' ), '1.0', true );
	wp_enqueue_script( 'royal',
		get_bloginfo( 'template_directory' ) . '/royalslider/jquery.royalslider.min.js', array( 'jquery' ), '1.0', true );
	//STYLES
	wp_enqueue_style( 'royalCss', get_bloginfo( 'template_directory' ) . '/royalslider/style.css' );

}

add_action( 'wp_enqueue_scripts', 'themes_scripts' );


//actu size thumbnails
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'actu-thumb', 306, 181 ); //(cropped)
}


//ACF
if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page();
}

/**
 * gather images from ACF fields
 */
function new_eos_slider() {

	$images = get_field( 'slider' );

	if ( $images ): ?>
      <div id="eosSlider" class="royalSlider rsDefault">
		  <?php foreach ( $images as $image ): ?>
            <div>
              <img class="rsImg" data-rsTmb="<?php echo $image['url']; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo get_bloginfo('name'); ?><?php echo $image['alt']; ?>"/>
              <p class="rs-description"><?php echo $image['description']; ?></p>
            </div>

		  <?php endforeach; ?>
      </div>
	<?php endif;
}

/**
 * Eosslider from royalslider
 * a quick trick to get the old sliders
 * @param $sliderID
 */
function get_royalslider( $sliderID ) {
	global $wpdb;
	$table   = $wpdb->prefix . 'royalsliders';
	$sql     = $wpdb->prepare( " 
						SELECT *
						FROM $table a	
						WHERE a.id = %d
						", $sliderID );
	$results = $wpdb->get_results( $sql );
	if ( isset( $results[0]->body ) ) {
		$slider = $results[0]->body;
		echo stripslashes( $slider );

	}
}

add_theme_support( 'title-tag' );

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');