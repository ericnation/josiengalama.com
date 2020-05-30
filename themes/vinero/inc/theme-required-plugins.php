<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# TGM plugins
if ( ! function_exists( 'vinero_tgm_plugins' ) ) {
	function vinero_tgm_plugins() {

		$source = VINERO_PLUGINS_FROM_SERVER ? 'http://vlthemes.com/plugins/' : VINERO_THEME_DIRECTORY . 'inc/plugins/';

		$plugins = array(
			array(
				'name' => esc_html__( 'Kirki', 'vinero' ),
				'slug' => 'kirki',
				'required' => true,
			),
			array(
				'name' => esc_html__( 'Vinero Helper Plugin', 'vinero' ),
				'slug' => 'vinero_multipurpose_helper_plugin',
				'source' => esc_url( $source . 'vinero_multipurpose_helper_plugin.zip' ),
				'required' => true
			),
			array(
				'name' => esc_html__( 'Advanced Custom Fields PRO', 'vinero' ),
				'slug' => 'advanced-custom-fields-pro',
				'source' => esc_url( $source . 'advanced-custom-fields-pro.zip' ),
				'required' => true,
			),
			array(
				'name' => esc_html__( 'WPBakery Page Builder', 'vinero' ),
				'slug' => 'js_composer',
				'source' => esc_url( $source . 'js_composer.zip' ),
				'required' => false,
			),
			array(
				'name' => esc_html__( 'Templatera', 'vinero' ),
				'slug' => 'templatera',
				'source' => esc_url( $source . 'templatera.zip' ),
				'required' => false,
			),
			array(
				'name' => esc_html__( 'Revolution Slider', 'vinero' ),
				'slug' => 'revslider',
				'source' => esc_url( $source . 'revslider.zip' ),
				'required' => false,
			),
			array(
				'name' => esc_html__( 'Ultimate Addons for Visual Composer', 'vinero' ),
				'slug' => 'Ultimate_VC_Addons',
				'source' => esc_url( $source . 'Ultimate_VC_Addons.zip' ),
				'required' => false,
			),
			array(
				'name' => esc_html__( 'Visual Portfolio', 'vinero' ),
				'slug' => 'visual-portfolio',
				'required' => false,
			),
			array(
				'name' => esc_html__( 'Advanced WordPress Backgrounds', 'vinero' ),
				'slug' => 'advanced-backgrounds',
				'required' => false,
			),
			array(
				'name' => esc_html__( 'Rotating Tweets', 'vinero' ),
				'slug' => 'rotatingtweets',
				'required' => false,
			),
			array(
				'name' => esc_html__( 'Contact Form 7', 'vinero' ),
				'slug' => 'contact-form-7',
				'required' => false,
			),
			array(
				'name' => esc_html__( 'WooCommerce', 'vinero' ),
				'slug' => 'woocommerce',
				'required' => false,
			)
		);

		tgmpa( $plugins );
	}
}
add_action( 'tgmpa_register', 'vinero_tgm_plugins' );