<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

<input type="text" class="field" value="" placeholder="<?php _e('Recherche', 'eos'); ?>"  name="s" id="s">
	
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php _e('Recherche', 'eos'); ?>" />
	</form>
