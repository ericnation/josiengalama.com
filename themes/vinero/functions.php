<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

define( 'VINERO_THEME_DIRECTORY', esc_url( trailingslashit( get_template_directory_uri() ) ) );
define( 'VINERO_REQUIRE_DIRECTORY', trailingslashit( get_template_directory() ) );
define( 'VINERO_ACF_LOAD_JSON', false );
define( 'VINERO_PLUGINS_FROM_SERVER', true );
define( 'VINERO_WOOCOMMERCE', class_exists( 'WooCommerce' ) ? true : false );
define( 'VINERO_DEVELOPMENT', false );

# After setup
if ( ! function_exists( 'vinero_setup' ) ) {
	function vinero_setup() {

		load_theme_textdomain( 'vinero', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1920, 9999 );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'post-formats', array(
			'gallery',
			'link',
			'quote',
			'video',
			'audio'
		) );

		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary Menu', 'vinero' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'vinero' ),
			'header-socials' => esc_html__( 'Header Socials', 'vinero' ),
			'footer-socials' => esc_html__( 'Footer Socials', 'vinero' ),
		) );

		if ( VINERO_WOOCOMMERCE ) {
			add_theme_support( 'woocommerce' );
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-slider' );
		}

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name' => esc_html__( 'Small', 'vinero' ),
					'shortName' => esc_html__( 'S', 'vinero' ),
					'size' => 14,
					'slug' => 'small',
				),
				array(
					'name' => esc_html__( 'Normal', 'vinero' ),
					'shortName' => esc_html__( 'M', 'vinero' ),
					'size' => 17,
					'slug' => 'normal',
				),
				array(
					'name' => esc_html__( 'Large', 'vinero' ),
					'shortName' => esc_html__( 'L', 'vinero' ),
					'size' => 24,
					'slug' => 'large',
				),
				array(
					'name' => esc_html__( 'Huge', 'vinero' ),
					'shortName' => esc_html__( 'XL', 'vinero' ),
					'size' => 36,
					'slug' => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support( 'editor-color-palette', array(
			array(
				'name' => esc_html__( 'Accent Color', 'vinero' ),
				'slug' => 'accent',
				'color' => get_theme_mod( 'general_color', '#edbc36' ),
			),
			array(
				'name' => esc_html__( 'Black', 'vinero' ),
				'slug' => 'black',
				'color' => '#333333',
			),
			array(
				'name' => esc_html__( 'Gray', 'vinero' ),
				'slug' => 'gray',
				'color' => '#aaaaaa',
			),
			array(
				'name' => esc_html__( 'White', 'vinero' ),
				'slug' => 'white',
				'color' => '#ffffff',
			)
		) );
		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		add_image_size( 'vinero-standard', 1140, 684, true );
		add_image_size( 'vinero-masonry', 720, 560, true );
		add_image_size( 'vinero-also-like', 720, 480, true );
		add_image_size( 'vinero-full', 1920, '', false );
		add_image_size( 'vinero-thumbnail', 160, 140, true );
		add_image_size( 'vinero-avatar', 140, 140, true );

	}
}
add_action( 'after_setup_theme', 'vinero_setup' );

# Content width
if ( ! function_exists( 'vinero_content_width' ) ) {
	function vinero_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'vinero/content_width', 1140 );
	}
}
add_action( 'after_setup_theme', 'vinero_content_width', 0 );

# Import ACF

// if ( ! VINERO_DEVELOPMENT ) {
// 	add_filter( 'acf/settings/show_admin', '__return_false' );
// }

if ( ! VINERO_ACF_LOAD_JSON ) {
	require_once VINERO_REQUIRE_DIRECTORY . 'inc/helper/custom-fields/custom-fields.php';
}

if ( ! function_exists( 'vinero_acf_save_json' ) ) {
	function vinero_acf_save_json( $path ) {
		$path = VINERO_REQUIRE_DIRECTORY . 'inc/helper/custom-fields';
		return $path;
	}
}
add_filter( 'acf/settings/save_json', 'vinero_acf_save_json' );

if ( VINERO_ACF_LOAD_JSON ) {
	if ( ! function_exists( 'vinero_acf_load_json' ) ) {
		function vinero_acf_load_json( $paths ) {
			unset( $paths[0] );
			$paths[] = VINERO_REQUIRE_DIRECTORY . 'inc/helper/custom-fields';
			return $paths;
		}
	}
	add_filter( 'acf/settings/load_json', 'vinero_acf_load_json' );
}

# Kirki fields
if ( class_exists( 'Kirki' ) ) {
	require_once VINERO_REQUIRE_DIRECTORY . 'inc/framework/customizer.php';
}

# Required files
require_once VINERO_REQUIRE_DIRECTORY . 'inc/theme-required-plugins.php';
require_once VINERO_REQUIRE_DIRECTORY . 'inc/theme-enqueue.php';
require_once VINERO_REQUIRE_DIRECTORY . 'inc/theme-includes.php';
require_once VINERO_REQUIRE_DIRECTORY . 'inc/theme-functions.php';
require_once VINERO_REQUIRE_DIRECTORY . 'inc/theme-actions.php';
require_once VINERO_REQUIRE_DIRECTORY . 'inc/theme-filters.php';
require_once VINERO_REQUIRE_DIRECTORY . 'inc/theme-menus.php';
require_once VINERO_REQUIRE_DIRECTORY . 'inc/theme-update.php';

if ( VINERO_WOOCOMMERCE ) {
	require_once VINERO_REQUIRE_DIRECTORY . 'inc/theme-woocommerce.php';
}