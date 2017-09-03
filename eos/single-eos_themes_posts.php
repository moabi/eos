<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header();
global $post;
?>

<?php while ( have_posts() ) : the_post(); ?>
<?php 
$product_terms = wp_get_object_terms($post->ID, 'categorie');
?>
<div id="<?php echo $term->slug; ?>" class="references-post-wrapper">
<?php //get_sidebar(); ?>

		<div id="primary" class="references">
			<div id="content" role="main">
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-14-24">
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
      </div>
      <div class="pure-u-1 pure-u-md-10-24">
        <div class="padd">
	      <?php get_template_part( 'content', 'single' ); ?>

        <div class="clearfix"></div>
	      <?php include dirname(__FILE__).'/partials/project-block.php'; ?>
        </div>
      </div>
    </div>



				<?php endwhile; // end of the loop. ?>
<?php get_template_part( 'partials/related', 'posts' ); ?>


  </div><!-- #content -->
		</div><!-- #primary -->
</div>
<?php get_footer(); ?>