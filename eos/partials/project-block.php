<?php
/**
 * Created by PhpStorm.
 * User: david1
 * Date: 09/08/2017
 * Time: 21:42
 */
?>
<?php
$loc = get_field('localisation');
$ma = get_field('matre_douvrage');
$ddl = get_field('date_de_livraison');
$sur = get_field('surface');
$mon = get_field('montant');
?>
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
