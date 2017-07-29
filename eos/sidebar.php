<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
<?php wp_nav_menu( array( 'theme_location'=>'primary','container_class' => 'homeMenuCom' ) ); ?>
<?php wp_nav_menu( array( 'container_class' => 'ref_menu', 'theme_location' => 'ref_menu','menu_class' => 'menuref', ) ); 
?>
<div id="sep"></div>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>


			<?php endif; // end sidebar widget area ?>
			
<a href="<?php echo get_site_url(); ?>/actualites/eos-actualites/" id="archive_icon"><span></span><?php _e('Archives des actualités', 'eos'); ?></a>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>