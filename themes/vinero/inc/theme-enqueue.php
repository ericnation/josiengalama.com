<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

if ( ! class_exists( 'ThemeEnqueueAssets' ) ) {
	class ThemeEnqueueAssets{

		public function __construct() {
			$theme_info = wp_get_theme();
			$this->assets_dir = VINERO_THEME_DIRECTORY . 'assets/';
			$this->customizer_frontend_css = VINERO_THEME_DIRECTORY .'inc/framework/customizer-frontend.css';
			$this->customizer_editor_css = VINERO_THEME_DIRECTORY .'inc/framework/customizer-editor.css';

			$this->customizer_css = VINERO_THEME_DIRECTORY .'inc/framework/customizer.css';
			$this->theme_version = $theme_info[ 'Version' ];
			$this->init_assets();
		}

		public function init_assets() {
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles_admin' ) );
			add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_gutenberg_editor_styles' ) );
		}

		public function enqueue_styles_admin() {
			wp_enqueue_style( 'vlt-custom-admin-css', $this->assets_dir .'css/wp-admin.css', array(), $this->theme_version );
			wp_enqueue_script( 'vlt-custom-admin-js', $this->assets_dir .'scripts/admin.js', array( 'jquery' ), $this->theme_version, true );

			if ( ! class_exists( 'Kirki' ) ) {
				wp_enqueue_style( 'vlt-google-fonts-editor', $this->fonts_url(), false, $this->theme_version );
				wp_enqueue_style( 'vlt-customizer-editor', $this->customizer_editor_css, array(), $this->theme_version );
			}
		}

		public function enqueue_gutenberg_editor_styles() {
			wp_enqueue_style( 'vlt-gutenberg', $this->assets_dir .'css/gutenberg-style.css', array(), $this->theme_version );
		}

		public function enqueue_scripts() {

			if ( is_singular() && comments_open() ) {
				wp_enqueue_script( 'comment-reply' );
			}

			wp_enqueue_script( 'imagesloaded' );
			wp_enqueue_script( 'jquery-masonry' );

			wp_enqueue_script( 'superfish', $this->assets_dir .'vendors/superfish.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'superclick', $this->assets_dir .'vendors/superclick.min.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'inview', $this->assets_dir .'vendors/jquery.inview.min.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'theia-sticky-sidebar', $this->assets_dir .'vendors/theia-sticky-sidebar.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'headroom', $this->assets_dir .'vendors/headroom.min.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'headroom-jquery', $this->assets_dir .'vendors/jQuery.headroom.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'fancybox', $this->assets_dir .'vendors/jquery.fancybox.min.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'fitvids', $this->assets_dir .'vendors/jquery.fitvids.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'scrollTo', $this->assets_dir .'vendors/jquery.scrollTo.min.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'tooltipster', $this->assets_dir .'vendors/tooltipster.bundle.min.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'jarallax', $this->assets_dir .'vendors/jarallax.min.js', array( 'jquery' ), $this->theme_version, true );
			wp_enqueue_script( 'slickSlider', $this->assets_dir .'vendors/slick.min.js', array( 'jquery' ), $this->theme_version, true );

			wp_register_script( 'justifiedGallery', $this->assets_dir .'vendors/jquery.justifiedGallery.min.js', array( 'jquery' ), $this->theme_version, true );
			wp_register_script( 'countTo', $this->assets_dir .'vendors/jquery.countTo.js', array( 'jquery' ), $this->theme_version, true );
			wp_register_script( 'circle-progress', $this->assets_dir .'vendors/circle-progress.min.js', array( 'jquery' ), $this->theme_version, true );

			if ( VINERO_WOOCOMMERCE ) {
				wp_enqueue_script( 'vlt-woocommerce', $this->assets_dir .'scripts/woocommerce.js', array( 'jquery', 'jquery-ui-tabs' ), $this->theme_version, true );
			}

			wp_enqueue_script( 'vlt-main-script', $this->assets_dir .'scripts/script.js', array( 'jquery' ), $this->theme_version, true );
		}

		public function fonts_url() {
			$fonts_url = '';
			$fonts = array();
			$subsets = 'latin-ext';
			$fonts[] = 'Open Sans:400,400i,600,700';
			if ( $fonts ) {
				$fonts_url = add_query_arg( array(
					'family' => urlencode( implode( '|', $fonts ) ),
					'subset' => urlencode( $subsets ),
				), 'https://fonts.googleapis.com/css?family=' );
			}
			return $fonts_url;
		}

		public function enqueue_styles() {
			wp_enqueue_style( 'normalize', $this->assets_dir .'css/plugins/normalize.css', array(), $this->theme_version );
			wp_enqueue_style( 'grid', $this->assets_dir .'css/plugins/grid.css', array(), $this->theme_version );

			wp_enqueue_style( 'animate', $this->assets_dir .'css/plugins/animate.css', array(), $this->theme_version );
			wp_enqueue_style( 'fontawesome', $this->assets_dir .'fonts/fontawesome/font-awesome.min.css', array(), $this->theme_version );
			wp_enqueue_style( 'icofont', $this->assets_dir .'fonts/icofont/icofont.css', array(), $this->theme_version );

			wp_enqueue_style( 'superfish', $this->assets_dir .'css/plugins/superfish.css', array(), $this->theme_version );
			wp_enqueue_style( 'fancybox', $this->assets_dir .'css/plugins/jquery.fancybox.min.css', array(), $this->theme_version );
			wp_enqueue_style( 'slickSlider', $this->assets_dir .'css/plugins/slick.css', array(), $this->theme_version );
			wp_enqueue_style( 'tooltipster', $this->assets_dir .'css/plugins/tooltipster.bundle.min.css', array(), $this->theme_version );

			wp_enqueue_style( 'main-css', get_stylesheet_uri(), array(), $this->theme_version );
			wp_enqueue_style( 'vlt-custom-css', $this->assets_dir .'css/style.css', array(), $this->theme_version );
			if ( ! class_exists( 'Kirki' ) ) {
				wp_enqueue_style( 'vlt-google-fonts', $this->fonts_url(), false, $this->theme_version );
				wp_enqueue_style( 'vlt-customizer-frontend', $this->customizer_frontend_css, array(), $this->theme_version );
			}

		}

	}
	new ThemeEnqueueAssets;
}