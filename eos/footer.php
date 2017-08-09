<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="footer_left">
			<a href="<?php echo get_site_url(); ?>/contact"><?php _e('Contact', 'eos'); ?></a> <a href="<?php echo get_site_url(); ?>/mentions-legales"><?php _e('Copyrights', 'eos'); ?></a>
			<?php
// check if the repeater field has rows of data
if( have_rows('social_links','options') ):
	echo '<div class="social">';
 	// loop through the rows of data
    while ( have_rows('social_links','options') ) : the_row();
        // display a sub field value
        if(get_sub_field('link')){
	        echo '<a target="_blank" class="socialLinks" href="'.get_sub_field('link').'"><img src="'.get_sub_field('icon').'" /></a>';
        }
    endwhile;
	echo "</div>";
endif;

?>

			</div>
	</footer><!-- #colophon -->
	<div class="clearfix"></div>
	</div><!-- #page-gd -->
	<div class="clearfix"></div>
</div><!-- #page -->

<?php wp_footer(); ?>
</div><!-- bgcolors -->
<?php if(get_field('google_fonts','options')): ?>
	<?php echo get_field('js_footer','options'); ?>
<?php endif; ?>
</body>
</html>
<?php if(get_field('google_fonts','options')): ?>
<link href="<?php echo get_field('google_fonts','options'); ?>" rel="stylesheet">
<?php endif; ?>