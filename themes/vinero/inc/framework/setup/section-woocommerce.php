<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Woocommerce

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'sw_1',
	'section' => 'section_woocommerce',
	'default' => '<div class="kirki-separator">'.esc_html__( 'Shop Title', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'shop_title_layout',
	'section' => 'section_woocommerce',
	'label' => esc_html__( 'Blog Title Layout', 'vinero' ),
	'description' => esc_html__( 'Title layout for blog page.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'none' => esc_html__( 'None', 'vinero' ),
		'hero' => esc_html__( 'Hero', 'vinero' ),
		'minimal' => esc_html__( 'Minimal', 'vinero' )
	),
	'default' => 'hero',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'text',
	'settings' => 'shop_title',
	'section' => 'section_woocommerce',
	'label' => esc_html__( 'Title', 'vinero' ),
	'description' => esc_html__( 'Title for shop page.', 'vinero' ),
	'transport' => 'auto',
	'priority' => $priority++,
	'default' => ''
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'textarea',
	'settings' => 'shop_subtitle',
	'section' => 'section_woocommerce',
	'label' => esc_html__( 'Subtitle', 'vinero'),
	'description' => esc_html__( 'Subtitle for shop page.', 'vinero' ),
	'transport' => 'auto',
	'priority' => $priority++,
	'default' => ''
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'image',
	'settings' => 'shop_bg',
	'section' => 'section_woocommerce',
	'label' => esc_html__( 'Background Image', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => ''
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'sw_2',
	'section' => 'section_woocommerce',
	'default' => '<div class="kirki-separator">'.esc_html__( 'General Settings', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'woocommerce_show_cart',
	'section' => 'section_woocommerce',
	'label' => esc_html__( 'Cart Icon', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show cart icon.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on'  => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 1
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'woocommerce_catalog_mode',
	'section' => 'section_woocommerce',
	'label' => esc_html__( 'Catalog Mode', 'vinero' ),
	'description' => esc_html__( 'Switch "Enable" if you want to hide purchase button.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on'  => esc_html__( 'Enable', 'vinero' ),
		'off' => esc_html__( 'Disable', 'vinero' )
	),
	'default' => 0
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'woocommerce_layout',
	'section' => 'section_woocommerce',
	'label' => esc_html__( 'Woocommerce Layout', 'vinero' ),
	'description' => esc_html__( 'Select a woocommerce layout from the list below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'fullwidth' => esc_html__( 'Full Width', 'vinero' ),
		'right-sidebar' => esc_html__( 'Right Sidebar', 'vinero' ),
		'left-sidebar' => esc_html__( 'Left Sidebar', 'vinero' ),
	),
	'default' => 'right-sidebar',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'woocommerce_product_style',
	'section' => 'section_woocommerce',
	'label' => esc_html__( 'Product Style', 'vinero' ),
	'description' => esc_html__( 'Select a product style from the list below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'default' => esc_html__( 'Default', 'vinero' ),
	),
	'default' => 'default',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'woocommerce_type_pagination',
	'section' => 'section_woocommerce',
	'label' => esc_html__( 'Type Pagination', 'vinero' ),
	'description' => esc_html__( 'Select the type of navigation from the list below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'none' => esc_html__( 'None', 'vinero' ),
		'paged' => esc_html__( 'Paged', 'vinero' ),
		'numeric' => esc_html__( 'Numeric', 'vinero' ),
		'load-more' => esc_html__( 'Load More', 'vinero' )
	),
	'default' => 'numeric',
) );