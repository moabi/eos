<?php
// check if the repeater field has rows of data
if( have_rows('social_links','options') ):
	echo '<div class="social">';
	// loop through the rows of data
	while ( have_rows('social_links','options') ) : the_row();
		// display a sub field value
		if(get_sub_field('link')){
			echo '<a target="_blank" class="socialLinks" href="'.get_sub_field('link').'">';
			echo '<img src="'.get_sub_field('icon').'" alt="Suivez-nous" />';
			echo '</a>';
		}
	endwhile;
	echo "</div>";
endif;
