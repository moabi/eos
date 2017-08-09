<?php
/**
 * Created by PhpStorm.
 * User: david1
 * Date: 02/08/2017
 * Time: 20:33
 */
?>
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
