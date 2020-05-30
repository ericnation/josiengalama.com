<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Typekit

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'enable_typekit',
	'section' => 'section_typekit',
	'label' => esc_html__( 'Enable Typekit', 'vinero' ),
	'description' => esc_html__( 'Turn "Enable" if you want to activate Typekit.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on'  => esc_html__( 'Enable', 'vinero' ),
		'off' => esc_html__( 'Disable', 'vinero' )
	),
	'default' => '0',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'text',
	'settings' => 'typekit_id',
	'section' => 'section_typekit',
	'label' => esc_html__( 'Typekit ID', 'vinero' ),
	'description' => esc_html__( 'Enter the ID of your kit.', 'vinero' ),
	'tooltip' => '<a target="_blank" href="'.esc_url( 'https://helpx.adobe.com/typekit/using/add-fonts-website.html' ).'">'.esc_html__( 'Read More', 'vinero' ).'</a>',
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
	'active_callback' => array(
		array(
			'setting' => 'enable_typekit',
			'operator' => '==',
			'value' => '1',
		)
	),
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'repeater',
	'settings' => 'typekit_fonts',
	'section' => 'section_typekit',
	'label' => esc_html__( 'Typekit Fonts', 'vinero' ) ,
	'description' => esc_html__( 'Here you can add typekit fonts.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'row_label' => array(
		'type' => 'text',
		'value' => esc_html__( 'Typekit Font', 'vinero' ) ,
	),
	'fields' => array(
		'font_id' => array(
			'type' => 'text',
			'label' => esc_html__( 'ID', 'vinero' ) ,
		) ,
		'font_text' => array(
			'type' => 'text',
			'label' => esc_html__( 'Text', 'vinero' ) ,
		) ,
		'font_variants' => array(
			'type' => 'select',
			'label' => esc_html__( 'Variants', 'vinero' ) ,
			'multiple' => 18,
			'choices' => array(
				'100' => esc_html__( '100', 'vinero' ) ,
				'100italic' => esc_html__( '100italic', 'vinero' ) ,
				'200' => esc_html__( '200', 'vinero' ) ,
				'200italic' => esc_html__( '200italic', 'vinero' ) ,
				'300' => esc_html__( '300', 'vinero' ) ,
				'300italic' => esc_html__( '300italic', 'vinero' ) ,
				'regular' => esc_html__( 'regular', 'vinero' ) ,
				'italic' => esc_html__( 'italic', 'vinero' ) ,
				'500' => esc_html__( '500', 'vinero' ) ,
				'500italic' => esc_html__( '500italic', 'vinero' ) ,
				'600' => esc_html__( '600', 'vinero' ) ,
				'600italic' => esc_html__( '600italic', 'vinero' ) ,
				'700' => esc_html__( '700', 'vinero' ) ,
				'700italic' => esc_html__( '700italic', 'vinero' ) ,
				'800' => esc_html__( '800', 'vinero' ) ,
				'800italic' => esc_html__( '800italic', 'vinero' ) ,
				'900' => esc_html__( '900', 'vinero' ) ,
				'900italic' => esc_html__( '900italic', 'vinero' ) ,
			)
		),
	),
	'default' => '',
	'active_callback' => array(
		array(
			'setting' => 'enable_typekit',
			'operator' => '==',
			'value' => '1'
		)
	)
) );