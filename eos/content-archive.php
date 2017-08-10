<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<div class="pure-u-1-2 pure-u-md-1-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="box-overlay">
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>

          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 482.8 482.8" width="512" height="512">
            <g fill="#FFF">
              <path
                  d="M255.2 209.3c-5.3 5.3-5.3 13.8 0 19.1 21.9 21.9 21.9 57.5 0 79.4l-115 115c-21.9 21.9-57.5 21.9-79.4 0l-17.3-17.3c-21.9-21.9-21.9-57.5 0-79.4l115-115c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-115 115C8.7 322.7 0 343.6 0 365.8c0 22.2 8.6 43.1 24.4 58.8l17.3 17.3c16.2 16.2 37.5 24.3 58.8 24.3s42.6-8.1 58.8-24.3l115-115c32.4-32.4 32.4-85.2 0-117.6-5.2-5.3-13.8-5.3-19.1 0z"/>
              <path
                  d="M458.5 58.2l-17.3-17.3c-32.4-32.4-85.2-32.4-117.6 0l-115 115c-32.4 32.4-32.4 85.2 0 117.6 5.3 5.3 13.8 5.3 19.1 0s5.3-13.8 0-19.1c-21.9-21.9-21.9-57.5 0-79.4l115-115c21.9-21.9 57.5-21.9 79.4 0l17.3 17.3c21.9 21.9 21.9 57.5 0 79.4l-115 115c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l115-115c15.7-15.7 24.4-36.6 24.4-58.8 0-22.2-8.6-43.1-24.3-58.8z"/>
            </g>
          </svg>
        </a>
      </h2>
    </div>

    <div class="entry-content">

      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		  <?php
      if ( has_post_thumbnail() ) {
	      the_post_thumbnail();
      } else {
			  echo "<div class='nothumb'></div>";
		  }
		  ?>
      </a>

    </div><!-- .entry-content -->
  </article>
</div>