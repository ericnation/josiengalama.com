<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$theme_path_images = VINERO_THEME_DIRECTORY . 'assets/img/';

# Typekit

require_once VINERO_REQUIRE_DIRECTORY . 'inc/helper/typekit/AddTypekitFonts.php';

# Update Kirki config

Kirki::add_config( 'vinero_customize', array(
	'capability' => 'edit_theme_options',
	'option_type' => 'theme_mod',
) );

$first_level = 10;
$second_level = 10;

# General

Kirki::add_panel( 'panel_core', array(
	'title' => esc_html__( 'Core Options', 'vinero' ),
	'priority' => $first_level++,
	'icon' => 'dashicons-admin-generic',
) );

Kirki::add_section( 'core_general', array(
	'panel' => 'panel_core',
	'title' => esc_html__( 'General Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-admin-generic',
) );

Kirki::add_section( 'core_selection', array(
	'panel' => 'panel_core',
	'title' => esc_html__( 'Selection', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-editor-underline',
) );

Kirki::add_section( 'core_scrollbar', array(
	'panel' => 'panel_core',
	'title' => esc_html__( 'Scrollbar', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-sort',
) );

Kirki::add_section( 'core_login_logo', array(
	'panel' => 'panel_core',
	'title' => esc_html__( 'Login Page', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-shield',
) );

require_once VINERO_REQUIRE_DIRECTORY . 'inc/framework/setup/section-core.php';

# Header

Kirki::add_section( 'section_header_general', array(
	'title' => esc_html__( 'Header Options', 'vinero' ),
	'priority' => $first_level++,
	'icon' => 'dashicons-arrow-up-alt',
) );

require_once VINERO_REQUIRE_DIRECTORY . 'inc/framework/setup/section-header.php';

# Footer

Kirki::add_panel( 'panel_footer', array(
	'title' => esc_html__( 'Footer Options', 'vinero' ),
	'priority' => $first_level++,
	'icon' => 'dashicons-arrow-down-alt',
) );

Kirki::add_section( 'section_footer_general', array(
	'panel' => 'panel_footer',
	'title' => esc_html__( 'General Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-admin-generic',
) );

Kirki::add_section( 'section_footer_minimal', array(
	'panel' => 'panel_footer',
	'title' => esc_html__( 'Footer Minimal', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-editor-table',
) );

Kirki::add_section( 'section_footer_widget', array(
	'panel' => 'panel_footer',
	'title' => esc_html__( 'Footer Widget', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-welcome-widgets-menus',
) );

Kirki::add_section( 'section_footer_style', array(
	'panel' => 'panel_footer',
	'title' => esc_html__( 'Footer Style', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-admin-appearance',
) );

require_once VINERO_REQUIRE_DIRECTORY . 'inc/framework/setup/section-footer.php';

# Pages

Kirki::add_panel( 'panel_page', array(
	'title' => esc_html__( 'Page Options', 'vinero' ),
	'priority' => $first_level++,
	'icon' => 'dashicons-admin-page',
) );

Kirki::add_section( 'section_blog_general', array(
	'panel' => 'panel_page',
	'title' => esc_html__( 'General Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-admin-generic',
) );

Kirki::add_section( 'section_page', array(
	'panel' => 'panel_page',
	'title' => esc_html__( 'Page Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-welcome-add-page',
) );

Kirki::add_section( 'section_blog', array(
	'panel' => 'panel_page',
	'title' => esc_html__( 'Blog Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-admin-post',
) );

Kirki::add_section( 'section_archive', array(
	'panel' => 'panel_page',
	'title' => esc_html__( 'Archive Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-category',
) );

Kirki::add_section( 'section_search', array(
	'panel' => 'panel_page',
	'title' => esc_html__( 'Search Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-search',
) );

Kirki::add_section( 'section_single_post', array(
	'panel' => 'panel_page',
	'title' => esc_html__( 'Single Post', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-welcome-write-blog',
) );

Kirki::add_section( 'section_error_404', array(
	'title' => esc_html__( 'Error 404', 'vinero' ),
	'panel' => 'panel_page',
	'priority' => $second_level++,
	'icon' => 'dashicons-warning',
) );

require_once VINERO_REQUIRE_DIRECTORY . 'inc/framework/setup/section-pages.php';

# Portfolio

Kirki::add_panel( 'panel_portfolio', array(
	'title' => esc_html__( 'Portfolio Options', 'vinero' ),
	'panel' => '',
	'priority' => $first_level++,
	'icon' => 'dashicons-grid-view',
) );

Kirki::add_section( 'section_portfolio_single', array(
	'panel' => 'panel_portfolio',
	'title' => esc_html__( 'Single Work', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-welcome-write-blog',
) );

require VINERO_REQUIRE_DIRECTORY . 'inc/framework/setup/section-portfolio.php';

# Woocommerce

if ( VINERO_WOOCOMMERCE ) {

	Kirki::add_section( 'section_woocommerce', array(
		'panel' => 'woocommerce',
		'title' => esc_html__( 'General Settings', 'vinero' ),
		'priority' => $second_level++,
	) );

	require_once VINERO_REQUIRE_DIRECTORY . 'inc/framework/setup/section-woocommerce.php';

}

# Typography

Kirki::add_panel( 'panel_typography', array(
	'title' => esc_html__( 'Typography Options', 'vinero' ),
	'priority' => $first_level++,
	'icon' => 'dashicons-editor-bold',
) );

Kirki::add_section( 'typography_fonts', array(
	'panel' => 'panel_typography',
	'title' => esc_html__( 'General Fonts', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-editor-bold',
) );

Kirki::add_section( 'typography_text', array(
	'panel' => 'panel_typography',
	'title' => esc_html__( 'Text Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-text',
) );

Kirki::add_section( 'typography_headings', array(
	'panel' => 'panel_typography',
	'title' => esc_html__( 'Heading Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-editor-textcolor',
) );

Kirki::add_section( 'typography_blockquote', array(
	'panel' => 'panel_typography',
	'title' => esc_html__( 'Blockquote Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-editor-quote',
) );

Kirki::add_section( 'typography_buttons', array(
	'panel' => 'panel_typography',
	'title' => esc_html__( 'Button Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-admin-links',
) );

Kirki::add_section( 'typography_input', array(
	'panel' => 'panel_typography',
	'title' => esc_html__( 'Input Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-edit',
) );

Kirki::add_section( 'typography_widget', array(
	'panel' => 'panel_typography',
	'title' => esc_html__( 'Widget Options', 'vinero' ),
	'priority' => $second_level++,
	'icon' => 'dashicons-welcome-widgets-menus',
) );

require_once VINERO_REQUIRE_DIRECTORY . 'inc/framework/setup/section-typography.php';

# Typekit

Kirki::add_section( 'section_typekit', array(
	'title' => esc_html__( 'Adobe Typekit', 'vinero' ),
	'priority' => $first_level++,
	'icon' => 'dashicons-archive'
) );

require_once VINERO_REQUIRE_DIRECTORY . 'inc/framework/setup/section-typekit.php';