<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Header General

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'header_layout',
	'section' => 'section_header_general',
	'label' => esc_html__( 'Header layout', 'vinero' ),
	'description' => esc_html__( 'Select header layout from the list below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'default' => esc_html__( 'Default', 'vinero' ),
		'fullscreen' => esc_html__( 'Fullscreen', 'vinero' ),
		'aside' => esc_html__( 'Aside', 'vinero' ),
	),
	'default' => 'fullscreen',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'header_sticky_mode',
	'section' => 'section_header_general',
	'label' => esc_html__( 'Sticky Mode', 'vinero' ),
	'description' => esc_html__( 'Switch "Enable" if you want to activate "Sticky Mode".', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Enable', 'vinero' ),
		'off' => esc_html__( 'Disable', 'vinero' )
	),
	'default' => 0,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'shg_1',
	'section' => 'section_header_general',
	'default' => '<div class="kirki-separator">'.esc_html__( 'Logo', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'image',
	'settings' => 'header_default_logo',
	'section' => 'section_header_general',
	'label' => esc_html__( 'Logo', 'vinero' ),
	'description' => esc_html__( 'Choose a logo image to display for header.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'dimension',
	'settings' => 'header_logo_height',
	'section' => 'section_header_general',
	'label' => esc_html__( 'Logo height', 'vinero' ),
	'description' => esc_html__( 'Enter the height of the logo.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
	'output' => array(
		array(
			'element' => '.vlt-header .vlt-header__logo img, .vlt-footer .vlt-footer__logo img',
			'property' => 'height'
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'shg_2',
	'section' => 'section_header_general',
	'default' => '<div class="kirki-separator">'.esc_html__( 'Additional', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'header_show_social',
	'section' => 'section_header_general',
	'label' => esc_html__( 'Show Socials', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to display "Socials Lists".', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on'  => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 1
) );


// /***********************************************************
// Header
// ***********************************************************/


// $priority = 0;

// Kirki::add_field('vinero_customize', array(
//     'type' => 'select',
//     'settings' => 'header_layout',
//     'label' => esc_html__('Header Layout', 'vinero'),
//     'section' => 'section_header_layout',
//     'default' => 'fullscreen',
//     'priority' => $priority++,
//     'choices' => array(
//         'default' => esc_html__('Default Menu', 'vinero'),
//         'sidebar' => esc_html__('Sidebar Menu', 'vinero'),
//         'fullscreen' => esc_html__('Fullscreen Menu', 'vinero'),
//    )
// ));



// Kirki::add_field('vinero_customize', array(
//     'type' => 'toggle',
//     'settings' => 'header_fullscreen_social',
//     'label' => esc_html__('Show Social', 'vinero'),
//     'section' => 'section_header_layout',
//     'default' => '1',
//     'priority' => $priority++,
//     'active_callback' => array(
//         array(
//             'setting' => 'header_layout',
//             'operator' => '==',
//             'value' => 'fullscreen'
//        )
//    )

// ));


// Kirki::add_field('vinero_customize', array(
//     'type' => 'toggle',
//     'settings' => 'header_sidebar_social',
//     'label' => esc_html__('Show Social', 'vinero'),
//     'section' => 'section_header_layout',
//     'default' => '1',
//     'priority' => $priority++,
//     'active_callback' => array(
//         array(
//             'setting' => 'header_layout',
//             'operator' => '==',
//             'value' => 'sidebar'
//        )
//    )

// ));


// /***********************************************************
// Navbar Style
// ***********************************************************/

// $priority = 0;

// Kirki::add_field('vinero_customize', array(
//     'type' => 'select',
//     'settings' => 'header_navbar_style',
//     'label' => esc_html__('Navbar Style', 'vinero'),
//     'section' => 'section_header_settings',
//     'default' => 'static',
//     'priority' => $priority++,
//     'choices' => array(
//         'absolute' => esc_html__('Absolute', 'vinero'),
//         'fixed' => esc_html__('Fixed', 'vinero'),
//         'fixedtop' => esc_html__('Fixed Top', 'vinero'),
//         'sticky' => esc_html__('Sticky', 'vinero'),
//         'static' => esc_html__('Static', 'vinero'),
//    )
// ));



// Kirki::add_field('vinero_customize', array(
//     'type' => 'text',
//     'settings' => 'header_navbar_sticky_offset',
//     'label' => esc_html__('Sticky Offset', 'vinero'),
//     'section' => 'section_header_settings',
//     'default' => '200',
//     'priority' => $priority++,
//     'active_callback' => array(
//         array(
//             'setting' => 'header_navbar_style',
//             'operator' => '==',
//             'value' => 'sticky'
//        )
//    )
// ));


// Kirki::add_field('vinero_customize', array(
//     'type' => 'dimension',
//     'settings' => 'header_height',
//     'label' => esc_html__('Header Height', 'vinero'),
//     'section' => 'section_header_settings',
//     'default' => '90px',
//     'priority' => $priority++,
//     'output' => array(
//         array(
//             'element' => '.vlt-header--default .vlt-header--nav ul.menu > li, .vlt-header .vlt-header--logo, .vlt-toggle-btn, .vlt-header--default .no-menu',
//             'property' => 'line-height'
//        )
//    )
// ));


// /***********************************************************
// Header Social
// ***********************************************************/

// $priority = 0;

// Kirki::add_field('vinero_customize', array(
//     'type' => 'repeater',
//     'label' => esc_html__('Social List (Icon)', 'vinero'),
//     'section' => 'section_header_social',
//     'priority' => $priority++,
//     'row_label' => array(
//         'type' => 'text',
//         'value' => esc_html__('Social', 'vinero')
//    ),
//     'settings' => 'header_social_list_icon',
//     'default' => '',
//     'fields' => array(
//         'header_social_list_icon_icon' => array(
//             'type' => 'text',
//             'label' => esc_html__('Social Icon Class', 'vinero'),
//        ),
//         'header_social_list_icon_link' => array(
//             'type' => 'text',
//             'label' => esc_html__('Social URL', 'vinero'),
//        )
//    )
// ));
