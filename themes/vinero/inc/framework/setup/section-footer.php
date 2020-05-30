<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Footer General

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'footer_layout',
	'section' => 'section_footer_general',
	'label' => esc_html__( 'Footer layout', 'vinero' ),
	'description' => esc_html__( 'Select footer layout from the list below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'minimal' => esc_html__( 'Minimal', 'vinero' ),
		'widget' => esc_html__( 'Widget', 'vinero' ),
	),
	'default' => 'minimal',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'footer_fixed',
	'section' => 'section_footer_general',
	'label' => esc_html__( 'Fixed Footer', 'vinero' ),
	'description' => esc_html__( 'Switch "Enable" if you want to activate fixed effect.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on'  => esc_html__( 'Enable', 'vinero' ),
		'off' => esc_html__( 'Disable', 'vinero' )
	),
	'default' => 0
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'textarea',
	'settings' => 'footer_copyright',
	'section' => 'section_footer_general',
	'label' => esc_html__( 'Copyright', 'vinero' ),
	'description' => esc_html__( 'Enter footer copyright.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
) );

# Footer minimal

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'footer_logo',
	'section' => 'section_footer_minimal',
	'label' => esc_html__( 'Show Logo', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show logo.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on'  => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 1
) );

# Footer widget

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'footer_columns',
	'section' => 'section_footer_widget',
	'label' => esc_html__( 'Widget Columns', 'vinero' ),
	'description' => esc_html__( 'Select number of columns.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		1 => esc_html__( 'One Column', 'vinero' ),
		2 => esc_html__( 'Two Columns', 'vinero' ),
		3 => esc_html__( 'Three Columns', 'vinero' ),
		4 => esc_html__( 'Four Columns', 'vinero' ),
	),
	'default' => 3
) );

# Footer style

Kirki::add_field( 'vinero_customize', array(
	'type' => 'color',
	'settings' => 'footer_bg',
	'section' => 'section_footer_style',
	'label' => esc_html__( 'Footer Background', 'vinero' ),
	'description' => esc_html__( 'Select background color for the footer.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'alpha' => false
	),
	'output' => array(
		array(
			'element' => '.vlt-footer__inner',
			'property' => 'background-color'
		)
	),
	'default' => '#efefef'
) );