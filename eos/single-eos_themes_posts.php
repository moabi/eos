<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php 
$product_terms = wp_get_object_terms($post->ID, 'categorie');
if(!empty($product_terms)){
  if(!is_wp_error( $product_terms )){

    foreach($product_terms as $term){  
    }

  }
}
?>
<div id="<?php echo $term->slug; ?>" class="references-post-wrapper">
<?php get_sidebar(); ?>

		<div id="primary" class="references">
			<div id="content" role="main">

					<?php get_template_part( 'content', 'single' ); ?>
					
				<?php 
				//add the slider with the custom field
				$slider_id = get_field('identifiant_du_slider');
				$images = get_field('slider');
				//if we find images, init slider
				if(!empty($images) ) {
					new_eos_slider();
						
				} else {
					//init the old royalslider (deprecated)
					echo "<div id='blockslider'>";
					  echo get_royalslider($slider_id);
					echo "<div class='clearfix'></div></div>";
				}
				?>
					
	<?php 
	$loc = get_field('localisation');
	$ma = get_field('matre_douvrage');
	$ddl = get_field('date_de_livraison');
	$sur = get_field('surface');
	$mon = get_field('montant');
	
	?>
	<?php if (empty($loc)  && empty($ma) && empty($ddl) && empty($sur) && empty($mon)) {
		
	 } else {
	
	?>	
	<div class="clearfix"></div>
	
	<div id="bloc-info">

		<ul>
		
	<?php if ($loc != "") { ?>
		<li><span class="label"><?php _e('Localisation', 'eos'); ?> : </span><?php echo get_field('localisation'); ?></li>
	<?php } ?>
	
	<?php if ($ma != "") { ?>
			<li><span class="label"><?php _e('Maître d\'ouvrage', 'eos'); ?> : </span><?php echo get_field('matre_douvrage'); ?></li>
	<?php } ?>		
	<?php if ($ddl != "") { ?>
			<li><span class="label"><?php _e('Date de livraison', 'eos'); ?> : </span><?php echo get_field('date_de_livraison'); ?></li>
	<?php } ?>
		
	<?php if ($sur != "") { ?>
			<li><span class="label"><?php _e('Surface', 'eos'); ?> : </span><?php echo get_field('surface'); ?> <?php _e('m²', 'eos'); ?> </li>
	<?php } ?>
			
	<?php if ($mon != "") { ?>
			<li><span class="label"><?php _e('Montant', 'eos'); ?> : </span><?php echo get_field('montant'); ?> <?php _e('€ HT', 'eos'); ?></li>
	<?php } ?>
	
		</ul>	
	</div><!-- #bloc-info -->
	<?php } ?>

								
					
				<?php endwhile; // end of the loop. ?>
			

			</div><!-- #content -->
		</div><!-- #primary -->
</div>
<?php get_footer(); ?>