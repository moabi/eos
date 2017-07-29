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
			<div id="footer_right">
			</div>
	</footer><!-- #colophon -->
	<div class="clearfix"></div>
	</div><!-- #page-gd -->
	<div class="clearfix"></div>
</div><!-- #page -->

<?php wp_footer(); ?>
</div><!-- bgcolors -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-6747896-33', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>

<link href="http://fonts.googleapis.com/css?family=Open Sans&subset=latin" rel="stylesheet" type="text/css">