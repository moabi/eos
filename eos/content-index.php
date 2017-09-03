<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content index">
		
		<div id="call">
		<?php the_content(); ?>
		</div>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2">
        <a class="btn btn-reg"
           style="background-color:<?php echo get_field( 'bouton_particulier_couleur' ); ?>;color:<?php echo get_field( 'couleur_texte' ); ?>"
           href="<?php echo get_field( 'button_link' ); ?>">
			<?php echo get_field( 'button' ); ?>
        </a>
      </div>
      <div class="pure-u-1 pure-u-md-1-2">
        <a class="btn btn-reg"
           style="background-color:<?php echo get_field( 'bouton_pro_couleur' ); ?>;;color:<?php echo get_field( 'couleur_texte_2' ); ?>;"
           href="<?php echo get_field( 'button_link_2' ); ?>">
			<?php echo get_field( 'button_2' ); ?>
        </a>
      </div>
    </div>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
