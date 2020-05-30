<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# General

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'sg_1',
	'section' => 'core_general',
	'default' => '<div class="kirki-separator">'.esc_html__( 'Site Layout', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'dimension',
	'settings' => 'container_width',
	'section' => 'core_general',
	'label' => esc_html__( 'Max Width of Container', 'vinero' ),
	'description' => esc_html__( 'Controls the overall container width. (in px)', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '1140px',
	'output' => array(
		array(
			'element' => '.container',
			'property' => 'max-width'
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'background',
	'settings' => 'body_background',
	'section' => 'core_general',
	'label' => esc_html__( 'Body Background', 'vinero' ),
	'description' => esc_html__( 'Select background for body.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => array(
		'background-color' => '#ffffff',
		'background-image' => '',
		'background-repeat' => 'repeat',
		'background-position' => 'center center',
		'background-size' => 'cover',
		'background-attachment' => 'scroll',
	),
	'output' => array(
		array(
			'element' => 'body',
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'sg_2',
	'section' => 'core_general',
	'default' => '<div class="kirki-separator">'.esc_html__( 'Preloader', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'show_preloader',
	'section' => 'core_general',
	'label' => esc_html__( 'Show Preloader', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show preloader.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => '1',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'select',
	'settings' => 'preloader_style',
	'section' => 'core_general',
	'label' => esc_html__( 'Style Preloader', 'vinero' ),
	'description' => esc_html__( 'Select preloader style from the list below.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'spinner' => esc_html__( 'Spinner', 'vinero' ),
		'double' => esc_html__( 'Double', 'vinero' ),
		'signal' => esc_html__( 'Signal', 'vinero' ),
		'wordpress' => esc_html__( 'WordPress', 'vinero' ),
		'image' => esc_html__( 'Image', 'vinero' ),
	),
	'default' => 'signal',
	'active_callback' => array(
		array(
			'setting' => 'show_preloader',
			'operator' => '==',
			'value' => '1'
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'image',
	'settings' => 'preloader_image',
	'section' => 'core_general',
	'label' => esc_html__( 'Preloader Image', 'vinero' ),
	'description' => esc_html__( 'Choose an image for preloader.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
	'active_callback' => array(
		array(
			'setting' => 'preloader_style',
			'operator' => '==',
			'value' => 'image'
		),
		array(
			'setting' => 'show_preloader',
			'operator' => '==',
			'value' => '1'
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'dimension',
	'settings' => 'preloader_image_height',
	'section' => 'core_general',
	'label' => esc_html__( 'Preloader Height', 'vinero' ),
	'description' => esc_html__( 'Enter the height of the preloader image.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
	'output' => array(
		array(
			'element' => '.vlt-site-preloader .vlt-site-preloader__inner img',
			'property' => 'height'
		)
	),
	'active_callback' => array(
		array(
			'setting' => 'preloader_style',
			'operator' => '==',
			'value' => 'image'
		),
		array(
			'setting' => 'show_preloader',
			'operator' => '==',
			'value' => '1'
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'custom',
	'settings' => 'sg_3',
	'section' => 'core_general',
	'default' => '<div class="kirki-separator">'.esc_html__( 'Additional', 'vinero' ).'</div>',
	'priority' => $priority++,
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'color',
	'settings' => 'general_color',
	'section' => 'core_general',
	'label' => esc_html__( 'Primary Color', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'output' => array(
		array(
			'element' => '
				.vlt-background-color,
				.vlt-onsale,
				.fancybox-button,
				.vlt-timeline-panel:hover .vlt-timeline-panel__date
			',
			'property' => 'background-color',
		),
		array(
			'element' => '
				.mejs-controls .mejs-time-rail .mejs-time-current,
				.vlt-timeline-panel:hover::after
			',
			'property' => 'background-color',
			'suffix' => '!important'
		),
		array(
			'element' => '
				.vlt-border-color
			',
			'property' => 'border-color',
		),
		array(
			'element' => '
				.vlt-text-color,
				a:hover,
				.vlt-content-empty a:not(.vlt-btn),
				.vlt-widget.widget_meta ul > li::before,
				.vlt-widget.widget_pages ul > li::before,
				.vlt-widget.widget_categories ul > li::before,
				.vlt-widget.widget_archive ul > li::before,
				.vlt-widget.widget_recent_comments ul > li::before,
				.vlt-widget.widget_nav_menu ul > li::before,
				.vlt-widget.widget_recent_entries ul > li::before,
				.vlt-widget.widget_layered_nav ul > li::before,
				.vlt-widget.widget_product_categories ul > li::before,
				.vlt-widget.widget_rating_filter ul > li::before,
				.vlt-comment-item .vlt-comment-left .vlt-comment-header a:hover,
				.vlt-comments-navigation a:hover,
				.vlt-post-about-author__content ul a:hover,
				.widget_rotatingtweets_widget a,
				.vlt-portfolio-navigation a.all-works:hover span,
				.star-rating span::before,
				.single-product .comment-form-rating .stars:hover a::before,
				.single-product .comment-form-rating .stars.selected a.active::before,
				.single-product .comment-form-rating .stars.selected a:not(.active)::before
			',
			'property' => 'color',
		),
	),
	'default' => '#edbc36',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'boxed_mode',
	'section' => 'core_general',
	'label' => esc_html__( 'Boxed Mode', 'vinero' ),
	'description' => esc_html__( 'Switch "Enable" if you want to activate "Boxed Mode".', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Enable', 'vinero' ),
		'off' => esc_html__( 'Disable', 'vinero' )
	),
	'default' => 0
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'dimension',
	'settings' => 'boxed_mode_width',
	'section' => 'core_general',
	'label' => esc_html__( 'Max Width of Content', 'vinero' ),
	'description' => esc_html__( 'Controls the overall content width. (in px)', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '1200px',
	'output' => array(
		array(
			'element' => '.vlt-entry-site--boxed',
			'property' => 'max-width'
		)
	),
	'active_callback' => array(
		array(
			'setting' => 'boxed_mode',
			'operator' => '==',
			'value' => 1
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'show_back_to_top',
	'section' => 'core_general',
	'label' => esc_html__( 'Back to Top Button', 'vinero' ),
	'description' => esc_html__( 'Switch "Show" if you want to show "Back to Top" button.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Show', 'vinero' ),
		'off' => esc_html__( 'Hide', 'vinero' )
	),
	'default' => 1
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'grayscale_filter',
	'section' => 'core_general',
	'label' => esc_html__( 'Grayscale Images', 'vinero' ),
	'description' => esc_html__( 'Switch "Enable" if you want to activate grayscale filter.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Enable', 'vinero' ),
		'off' => esc_html__( 'Disable', 'vinero' )
	),
	'default' => 0
) );

# Selection

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'color',
	'settings' => 'selection_color',
	'section' => 'core_selection',
	'label' => esc_html__( 'Selection Text Color', 'vinero' ),
	'description' => esc_html__( 'Select the text color, matches the portion of an element that is selected by a user.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'alpha' => false
	),
	'default' => '#ffffff',
	'output' => array(
		array(
			'element' => '::selection',
			'property' => 'color',
			'suffix' => '!important'
		),
		array(
			'element' => '::-moz-selection',
			'property' => 'color',
			'suffix' => '!important'
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'color',
	'settings' => 'selection_background_color',
	'section' => 'core_selection',
	'label' => esc_html__( 'Selection Background Color', 'vinero' ),
	'description' => esc_html__( 'Select the text background color, matches the portion of an element that is selected by a user.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'alpha' => true
	),
	'default' => '#333333',
	'output' => array(
		array(
			'element' => '::selection',
			'property' => 'background-color',
			'suffix' => '!important'
		),
		array(
			'element' => '::-moz-selection',
			'property' => 'background-color',
			'suffix' => '!important'
		)
	)
) );

# Scrollbar

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'switch',
	'settings' => 'custom_scrollbar',
	'section' => 'core_scrollbar',
	'label' => esc_html__( 'Custom Scrollbar', 'vinero' ),
	'description' => esc_html__( 'Switch "YES" if you want to configure the scrollbar.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'on' => esc_html__( 'Yes', 'vinero' ),
		'off' => esc_html__( 'No', 'vinero' )
	),
	'default' => '0',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'color',
	'settings' => 'custom_scrollbar_bg',
	'section' => 'core_scrollbar',
	'label' => esc_html__( 'Bar Background', 'vinero' ),
	'description' => esc_html__( 'Select background color for scrollbar.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'alpha' => false
	),
	'default' => '',
	'output' => array(
		array(
			'element' => '.vlt-custom-scrollbar ::-webkit-scrollbar',
			'property' => 'background-color'
		)
	),
	'active_callback' => array(
		array(
			'setting' => 'custom_scrollbar',
			'operator' => '==',
			'value' => '1'
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'color',
	'settings' => 'custom_scrollbar_color',
	'section' => 'core_scrollbar',
	'label' => esc_html__( 'Bar Color', 'vinero' ),
	'description' => esc_html__( 'Select color for scrollbar.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'alpha' => false
	),
	'default' => '',
	'output' => array(
		array(
			'element' => '.vlt-custom-scrollbar ::-webkit-scrollbar-thumb',
			'property' => 'background-color'
		)
	),
	'active_callback' => array(
		array(
			'setting' => 'custom_scrollbar',
			'operator' => '==',
			'value' => '1'
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'slider',
	'settings' => 'custom_scrollbar_width',
	'section' => 'core_scrollbar',
	'label' => esc_html__( 'Bar Width', 'vinero' ),
	'description' => esc_html__( 'Select the thickness of the scrollbar.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'choices' => array(
		'min' => '0',
		'max' => '16',
		'step' => '2'
	),
	'default' => '',
	'output' => array(
		array(
			'element' => '.vlt-custom-scrollbar ::-webkit-scrollbar',
			'property' => 'width',
			'units' => 'px'
		)
	),
	'active_callback' => array(
		array(
			'setting' => 'custom_scrollbar',
			'operator' => '==',
			'value' => '1'
		)
	)
) );

# Login Logo

$priority = 0;

Kirki::add_field( 'vinero_customize', array(
	'type' => 'image',
	'settings' => 'login_logo_image',
	'section' => 'core_login_logo',
	'label' => esc_html__( 'Authorization Logo', 'vinero' ),
	'description' => esc_html__( 'If you want to change the logo of WordPress to your logo, you can use this options.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'dimension',
	'settings' => 'login_logo_image_height',
	'section' => 'core_login_logo',
	'label' => esc_html__( 'Logo Height', 'vinero' ),
	'description' => esc_html__( 'Enter logo height.', 'vinero' ),
	'priority' => $priority++,
	'transport' => 'auto',
	'default' => '',
	'active_callback' => array(
		array(
			'setting' => 'login_logo_image',
			'operator' => '!=',
			'value' => ''
		)
	)
) );

Kirki::add_field( 'vinero_customize', array(
	'type' => 'dimension',
	'settings' => 'login_logo_image_width',
	'section' => 'core_login_logo',
	'label' => esc_html__( 'Logo Width', 'vinero' ),
	'description' => esc_html__( 'Enter logo width.', 'vinero' ),
	'transport' => 'auto',
	'priority' => $priority++,
	'default' => '',
	'active_callback' => array(
		array(
			'setting' => 'login_logo_image',
			'operator' => '!=',
			'value' => ''
		)
	)
) );


/***********************************************************
General Settings
***********************************************************/


// $priority = 0;

// Kirki::add_field('vinero_customize', array(
// 	'type' => 'toggle',
// 	'settings' => 'general_back_to_top',
// 	'label' => esc_html__('Back To Top', 'vinero'),
// 	'section' => 'core_general_settings',
// 	'default' => '1',
// 	'priority' => $priority++
// ));


// Kirki::add_field('vinero_customize', array(
// 	'type' => 'color',
// 	'settings' => 'general_color',
// 	'label' => esc_html__('Primary Color', 'vinero'),
// 	'section' => 'core_general_settings',
// 	'default' => '#edbc36',
// 	'priority' => $priority++,
// 	'alpha' => false,
// 	'output' => array(
// 		array(
// 			'element' => '.vlt-background-color, #wp-calendar td#today, .woocommerce table.shop_table .order-total, .woocommerce .shop-card--sale, .vlt-btn--primary-color, .vlt-btn--secondary-color:not(.vlt-btn--disable):hover, .vlt-timeline > li .vlt-timeline-panel:hover .vlt-timeline--badge, .vlt-timeline > li .vlt-timeline-panel:hover .vlt-timeline-panel--date',
// 			'property' => 'background-color',
// 		),
// 		array(
// 			'element' => '.vlt-border-color, .woocommerce .woocommerce-MyAccount-navigation ul li.is-active a, .woocommerce-Message, .woocommerce-message, .woocommerce-info, .woocommerce-error, .vlt-btn--primary-color, .vlt-btn--secondary-color',
// 			'property' => 'border-color',
// 		),
// 		array(
// 			'element' => '.vlt-text-color, a:hover, .vc_custom_heading a:hover, .vlt-widget ul li a:hover, .widget_rotatingtweets_widget a, .vlt-comment--header .vlt-comment--date:hover, .vlt-post-classic .vlt-post--meta a:hover, .woocommerce-Message::before, .woocommerce-message::before, .woocommerce-info::before, .woocommerce-error::before, .vlt-btn--secondary-color, .vlt-btn--secondary-color.vlt-btn--disable:hover, .post-sticky-ribbon',
// 			'property' => 'color',
// 		),
// 	)
// ));


// /***********************************************************
// Prelaoder
// ***********************************************************/

// $priority = 0;

// Kirki::add_field('vinero_customize', array(
// 	'type' => 'select',
// 	'settings' => 'preloader_settings',
// 	'label' => esc_html__('Preloader Settings', 'vinero'),
// 	'section' => 'section_preloader_settings',
// 	'default' => 'style3',
// 	'priority' => $priority++,
// 	'choices' => array(
// 		'none' => esc_html__('None Preloader', 'vinero'),
// 		'style1' => esc_html__('Default Spinner', 'vinero'),
// 		'style2' => esc_html__('Double Spinner', 'vinero'),
// 		'style3' => esc_html__('Wave Spinner', 'vinero'),
// 		'style4' => esc_html__('Wordpress Loader', 'vinero'),
// 		'style5' => esc_html__('Custom Image', 'vinero'),
// 	)
// ));

// Kirki::add_field('vinero_customize', array(
//     'type' => 'image',
//     'settings' => 'preloader_image',
//     'label' => esc_html__('Preloader Image', 'vinero'),
//     'section' => 'section_preloader_settings',
//     'default' => '',
//     'priority' => $priority++,
//     'active_callback' => array(
//         array(
//             'setting' => 'preloader_settings',
//             'operator' => '==',
//             'value' => 'style5'
//        )
//    )
// ));


// /***********************************************************
// Selection
// ***********************************************************/


// $priority = 0;

// Kirki::add_field('vinero_customize', array(
// 	'type' => 'color',
// 	'settings' => 'core_selection_color',
// 	'label' => esc_html__('Selection Color', 'vinero'),
// 	'section' => 'section_core_selection',
// 	'default' => '#ffffff',
// 	'priority' => $priority++,
// 	'alpha' => false,
// 	'output' => array(
// 		array(
// 			'element' => '::selection',
// 			'property' => 'color',
// 		),
// 		array(
// 			'element' => '::-moz-selection',
// 			'property' => 'color',
// 		)
// 	)
// ));


// Kirki::add_field('vinero_customize', array(
// 	'type' => 'color',
// 	'settings' => 'core_selection_background_color',
// 	'label' => esc_html__('Selection Background', 'vinero'),
// 	'section' => 'section_core_selection',
// 	'default' => '#2b2b2b',
// 	'priority' => $priority++,
// 	'alpha' => false,
// 	'output' => array(
// 		array(
// 			'element' => '::selection',
// 			'property' => 'background',
// 		),
// 		array(
// 			'element' => '::-moz-selection',
// 			'property' => 'background',
// 		)
// 	)
// ));


// /***********************************************************
// Logo
// ***********************************************************/


// $priority = 0;

// Kirki::add_field('vinero_customize', array(
//     'type' => 'select',
//     'settings' => 'header_logo_type',
//     'label' => esc_html__('Logo Type', 'vinero'),
//     'section' => 'section_logo_settings',
//     'default' => 'text',
//     'priority' => $priority++,
//     'choices' => array(
//         'text' => esc_html__('Text Logo', 'vinero'),
//         'image' => esc_html__('Image Logo', 'vinero'),
//    )
// ));

// Kirki::add_field('vinero_customize', array(
//     'type' => 'image',
//     'settings' => 'header_logo_image',
//     'label' => esc_html__('Image Logo', 'vinero'),
//     'section' => 'section_logo_settings',
//     'default' => '',
//     'priority' => $priority++,
//     'active_callback' => array(
//         array(
//             'setting' => 'header_logo_type',
//             'operator' => '==',
//             'value' => 'image'
//        )
//    )
// ));

// Kirki::add_field('vinero_customize', array(
//     'type' => 'dimension',
//     'settings' => 'header_logo_image_height',
//     'label' => esc_html__('Image Logo Height', 'vinero'),
//     'section' => 'section_logo_settings',
//     'default' => '',
//     'priority' => $priority++,
//     'active_callback' => array(
//         array(
//             'setting' => 'header_logo_type',
//             'operator' => '==',
//             'value' => 'image'
//        )
//    )
// ));


// Kirki::add_field('vinero_customize', array(
//     'type' => 'text',
//     'settings' => 'header_logo_text',
//     'label' => esc_html__('Text Logo', 'vinero'),
//     'section' => 'section_logo_settings',
//     'default' => 'VINERO',
//     'priority' => $priority++,
//     'active_callback' => array(
//         array(
//             'setting' => 'header_logo_type',
//             'operator' => '==',
//             'value' => 'text'
//        )
//    )
// ));


