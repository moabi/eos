<?php
/**
 * Created by PhpStorm.
 * User: david1
 * Date: 17/08/2017
 * Time: 00:12
 */
if ( function_exists( 'acf_add_local_field_group' ) ):

	acf_add_local_field_group( array(
		'key'                   => 'group_5994bf3bc1bb4',
		'title'                 => 'HomePage',
		'fields'                => array(
			array(
				'key'               => 'field_5994bf63feead',
				'label'             => 'Bouton particulier (texte)',
				'name'              => 'button',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => '',
			),
			array(
				'key'               => 'field_5994bf78feeae',
				'label'             => 'Bouton particulier (lien)',
				'name'              => 'button_link',
				'type'              => 'page_link',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'post_type'         => array(
					0 => 'page',
				),
				'taxonomy'          => array(),
				'allow_null'        => 0,
				'allow_archives'    => 1,
				'multiple'          => 0,
			),
			array(
				'key'               => 'field_5994bfd6feeb1',
				'label'             => 'Bouton particulier (couleur)',
				'name'              => 'bouton_particulier_couleur',
				'type'              => 'color_picker',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
			array(
				'key'               => 'field_5994c2c42e589',
				'label'             => 'particulier couleur texte',
				'name'              => 'couleur_texte',
				'type'              => 'color_picker',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
			array(
				'key'               => 'field_5994bf9ffeeaf',
				'label'             => 'Bouton pro (texte)',
				'name'              => 'button_2',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => '',
			),
			array(
				'key'               => 'field_5994bfb5feeb0',
				'label'             => 'Bouton pro (lien)',
				'name'              => 'button_link_2',
				'type'              => 'page_link',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'post_type'         => array(
					0 => 'page',
				),
				'taxonomy'          => array(),
				'allow_null'        => 0,
				'allow_archives'    => 1,
				'multiple'          => 0,
			),
			array(
				'key'               => 'field_5994bfeffeeb2',
				'label'             => 'Bouton pro (couleur)',
				'name'              => 'bouton_pro_couleur',
				'type'              => 'color_picker',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
			array(
				'key'               => 'field_5994c2ae2e588',
				'label'             => 'pro couleur texte',
				'name'              => 'couleur_texte_2',
				'type'              => 'color_picker',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => 1,
		'description'           => '',
	) );

endif;