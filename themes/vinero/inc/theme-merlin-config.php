<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

$wizard = new Merlin(

	$config  = array(
		'directory'            => 'merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'           => 'merlin',  // The wp-admin page slug where Merlin WP loads.
		'child_action_btn_url' => 'https://codex.wordpress.org/child_themes', // URL for the 'child-action-link'.
		'dev_mode'             => VINERO_DEVELOPMENT, // Enable development mode for testing.
		'license_step'         => false, // EDD license activation step.
		'license_required'     => false, // Require the license activation step.
		'license_help_url'     => '', // URL for the 'license-tooltip'.
		'edd_remote_api_url'   => '', // EDD_Theme_Updater_Admin remote_api_url.
		'edd_item_name'        => '', // EDD_Theme_Updater_Admin item_name.
		'edd_theme_slug'       => '', // EDD_Theme_Updater_Admin item_slug.
	),
	$strings = array(
		'admin-menu'               => esc_html__( 'Theme Setup', 'vinero' ),
		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'vinero' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'vinero' ),
		'ignore'                   => esc_html__( 'Disable this wizard', 'vinero' ),
		'btn-skip'                 => esc_html__( 'Skip', 'vinero' ),
		'btn-next'                 => esc_html__( 'Next', 'vinero' ),
		'btn-start'                => esc_html__( 'Start', 'vinero' ),
		'btn-no'                   => esc_html__( 'Cancel', 'vinero' ),
		'btn-plugins-install'      => esc_html__( 'Install', 'vinero' ),
		'btn-child-install'        => esc_html__( 'Install', 'vinero' ),
		'btn-content-install'      => esc_html__( 'Install', 'vinero' ),
		'btn-import'               => esc_html__( 'Import', 'vinero' ),
		'btn-license-activate'     => esc_html__( 'Activate', 'vinero' ),
		'btn-license-skip'         => esc_html__( 'Later', 'vinero' ),
		/* translators: Theme Name */
		'license-header%s'         => esc_html__( 'Activate %s', 'vinero' ),
		/* translators: Theme Name */
		'license-header-success%s' => esc_html__( '%s is Activated', 'vinero' ),
		/* translators: Theme Name */
		'license%s'                => esc_html__( 'Enter your license key to enable remote updates and theme support.', 'vinero' ),
		'license-label'            => esc_html__( 'License key', 'vinero' ),
		'license-success%s'        => esc_html__( 'The theme is already registered, so you can go to the next step!', 'vinero' ),
		'license-json-success%s'   => esc_html__( 'Your theme is activated! Remote updates and theme support are enabled.', 'vinero' ),
		'license-tooltip'          => esc_html__( 'Need help?', 'vinero' ),
		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Welcome to %s', 'vinero' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'vinero' ),
		'welcome%s'                => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.', 'vinero' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'vinero' ),
		'child-header'             => esc_html__( 'Install Child Theme', 'vinero' ),
		'child-header-success'     => esc_html__( 'You\'re good to go!', 'vinero' ),
		'child'                    => esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.', 'vinero' ),
		'child-success%s'          => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.', 'vinero' ),
		'child-action-link'        => esc_html__( 'Learn about child themes', 'vinero' ),
		'child-json-success%s'     => esc_html__( 'Awesome. Your child theme has already been installed and is now activated.', 'vinero' ),
		'child-json-already%s'     => esc_html__( 'Awesome. Your child theme has been created and is now activated.', 'vinero' ),
		'plugins-header'           => esc_html__( 'Install Plugins', 'vinero' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'vinero' ),
		'plugins'                  => esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.', 'vinero' ),
		'plugins-success%s'        => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'vinero' ),
		'plugins-action-link'      => esc_html__( 'Advanced', 'vinero' ),
		'import-header'            => esc_html__( 'Import Content', 'vinero' ),
		'import'                   => esc_html__( 'Let\'s import content to your website, to help you get familiar with the theme.', 'vinero' ),
		'import-action-link'       => esc_html__( 'Advanced', 'vinero' ),
		'ready-header'             => esc_html__( 'All done. Have fun!', 'vinero' ),
		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.', 'vinero' ),
		'ready-action-link'        => esc_html__( 'Extras', 'vinero' ),
		'ready-big-button'         => esc_html__( 'View your website', 'vinero' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://wordpress.org/support/', esc_html__( 'Explore WordPress', 'vinero' ) ),
		'ready-link-2'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://vlthemes.ticksy.com/', esc_html__( 'Get Theme Support', 'vinero' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'customize.php' ), esc_html__( 'Start Customizing', 'vinero' ) ),
	)
);

if ( ! function_exists( 'vinero_demo_import_files' ) ) {
	function vinero_demo_import_files() {
		return array(
			array(
				'import_file_name' => esc_html__( 'Demo Import', 'vinero' ),
				'local_import_file' => VINERO_REQUIRE_DIRECTORY . 'inc/demo/demo-content.xml',
				'local_import_widget_file' => VINERO_REQUIRE_DIRECTORY . 'inc/demo/widgets.wie',
				'local_import_customizer_file' => VINERO_REQUIRE_DIRECTORY . 'inc/demo/customizer.dat'
			),
		);
	}
}

add_filter( 'merlin_import_files', 'vinero_demo_import_files' );
add_filter( 'pt-ocdi/import_files', 'vinero_demo_import_files' );

if ( ! function_exists( 'vinero_after_import_setup' ) ) {
	function vinero_after_import_setup() {

		global $wp_rewrite;


		// Set menus
		$primary_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
		$footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );
		$site_socials = get_term_by( 'name', 'Site Socials', 'nav_menu' );

		set_theme_mod( 'nav_menu_locations', array(
			'primary-menu' => $primary_menu->term_id,
			'footer-menu' => $footer_menu->term_id,
			'header-socials' => $site_socials->term_id,
			'footer-socials' => $site_socials->term_id
		) );

		// Set pages
		$front_page_id = get_page_by_title( 'Homepage Portfolio' );
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );

		// Update permalink
		$wp_rewrite->set_permalink_structure( '/%postname%/' );

		// Update BSF Global Scripts
		if ( function_exists( 'bsf_update_option' ) ) {
			bsf_update_option( 'ultimate_global_scripts', 'enable' );
		}

		// Update option
		update_option( 'date_format', 'd M, Y' );

		// Import Revolution Slider
		if ( class_exists( 'RevSlider' ) ) {
			$revo_slider = new RevSlider();
			$slider_aliases = $revo_slider->getAllSliderAliases();
			$slider_array = array(
				'homepage-agency',
				'homepage-business',
				'homepage-corporate',
				'homepage-personal',
				'homepage-photography',
				'homepage-studio',
				'homepage-video-banner'
			);
			foreach ( $slider_array as $slider ) {
				if ( ! in_array( $slider, $slider_aliases ) ) {
					$path = VINERO_REQUIRE_DIRECTORY . 'inc/demo/sliders/' . $slider . '.zip';
					if ( file_exists( $path ) ) {
						$revo_slider->importSliderFromPost( true, true, $path );
					}
				}
			}
		}

	}
}
add_action( 'merlin_after_all_import', 'vinero_after_import_setup' );
add_action( 'pt-ocdi/after_import', 'vinero_after_import_setup' );

if ( ! function_exists( 'vinero_vc_set_as_theme' ) ) {
	function vinero_vc_set_as_theme() {

		if ( function_exists( 'vc_set_default_editor_post_types' ) ) {
			vc_set_default_editor_post_types( array(
				'page',
				'post',
				'portfolio',
				'product'
			) );
		}

		if ( function_exists( 'vc_set_as_theme' ) ) {
			vc_set_as_theme( $disable_updater = true );
		}

	}
}
add_action( 'vc_before_init', 'vinero_vc_set_as_theme' );