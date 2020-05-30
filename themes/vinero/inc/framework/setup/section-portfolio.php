<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Portfolio Single

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'portfolio_navigation',
	'section' => 'section_portfolio_single',
	'label' => esc_html__( 'Show navigation', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show navigation.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 1
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'portfolio_link',
	'section' => 'section_portfolio_single',
	'label' => esc_html__( 'Back to Works', 'vinero' ),
	'description' => esc_html__( 'Link to the list of portfolio posts.', 'vinero' ),
	'tooltip' => esc_html__( 'For back button', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'multiple' => 1,
	'choices' => Kirki_Helper::get_posts(
		array(
			'posts_per_page' => 9999,
			'post_type' => 'page'
		)
	),
	'default' => '',
	'active_callback' => array(
		array(
			'setting' => 'portfolio_navigation',
			'operator' => '==',
			'value' => 1
		)
	),
) );