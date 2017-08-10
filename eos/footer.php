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

			<div id="footer_left">
        <div class="pure-g">
          <div class="pure-u-1 pure-u-md-1-2">
	          <?php
            wp_nav_menu(
	              array( 'theme_location' => 'footer' )
            ); ?>
          </div>
          <div class="pure-u-1 pure-u-md-1-2">
            <?php include dirname(__FILE__).'/partials/socials.php'; ?>
          </div>
        </div>


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