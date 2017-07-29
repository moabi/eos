<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

//PAGE DES REFERENCES : LISTING
get_header(); ?>


<?php get_sidebar(); ?>
		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>





				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'content', 'archive' );
					?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Pas de résultat', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Merci de reformuler votre recherche.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
				
				
				<?php twentyeleven_content_nav( 'nav-above' ); ?>
				
				
			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->


<?php get_footer(); ?>