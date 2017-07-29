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
		<?php
$images = get_field('slider');

if( $images ): ?>
    <div class="royalSlider rsDefault" id="homeSlider">
        <?php foreach( $images as $image ): ?>
            <div>
                     <img class="rsImg" data-rsTmb="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                     <p class="rs-description"><?php echo $image['description']; ?></p>
			</div>
        
        <?php endforeach; ?>
    </div>
<?php endif; ?>

		<?php the_content(); ?>
		</div>

	</div><!-- .entry-content -->
	
	
	<div id="articles">


<ul id="actubox">
<?php
 $i =0; 
 ?>
<?php $recent = new WP_Query("showposts=2"); while($recent->have_posts()) : $recent->the_post();?>
<li class="actu_single numb<?php echo ++$i; ?>">
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
	<?php
  the_post_thumbnail('actu-thumb');
  ?>
   </a>
   <?php
	} 
	?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php my_excerpt(10) ?>

</li>
<?php endwhile; ?>
</ul>
<br />
		<a href="<?php echo get_site_url(); ?>/actualites/eos-actualites/" id="archive_icon"><?php _e('Archives des actualités', 'eos'); ?></a>
	</div>
	
	
	
</article><!-- #post-<?php the_ID(); ?> -->
