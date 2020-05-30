<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Register sidebars
if ( ! function_exists( 'vinero_register_sidebar' ) ) {
	function vinero_register_sidebar() {
		register_sidebar( array(
			'name' => esc_html__( 'Blog Sidebar', 'vinero' ),
			'id' => 'blog_sidebar',
			'description' => esc_html__( 'Blog Widget Area', 'vinero' ),
			'before_widget' => '<div id="%1$s" class="vlt-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="vlt-widget__title">',
			'after_title' => '</h5>'
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Contact Sidebar', 'vinero' ),
			'id' => 'contact_sidebar',
			'description' => esc_html__( 'Contact Widget Area', 'vinero' ),
			'before_widget' => '<div id="%1$s" class="vlt-widget vlt-widget--white %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="vlt-widget__title">',
			'after_title' => '</h5>'
		) );

		$footer_columns = get_theme_mod( 'footer_columns', 3 );

		for ( $i = 1; $i < $footer_columns + 1; $i++ ) {
			register_sidebar(array(
				'name' => sprintf( esc_html__( 'Footer Sidebar: %s Column', 'vinero' ), $i ),
				'id' => sanitize_key( 'footer_sidebar_' . $i ),
				'description' => esc_html__( 'Footer Widget Area', 'vinero' ),
				'before_widget' => '<div id="%1$s" class="vlt-widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h5 class="vlt-widget__title">',
				'after_title' => '</h5>'
			));
		}

		if ( VINERO_WOOCOMMERCE ) {
			register_sidebar( array(
				'name' => esc_html__( 'Shop Sidebar', 'vinero' ),
				'id' => 'shop_sidebar',
				'description' => esc_html__( 'Shop Widget Area', 'vinero' ),
				'before_widget' => '<div id="%1$s" class="vlt-widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h5 class="vlt-widget__title">',
				'after_title' => '</h5>'
			) );
		}
	}
}
add_action( 'widgets_init', 'vinero_register_sidebar' );

# Before site
if ( ! function_exists( 'vinero_before_site' ) ) {
	function vinero_before_site() {

		$class = 'vlt-entry-site';

		if ( get_theme_mod( 'boxed_mode', false ) ) {
			$class .= ' vlt-entry-site--boxed';
		}

		if ( get_theme_mod( 'grayscale_filter', false ) ) {
			$class .= ' vlt-entry-site--grayscale';
		}

		if ( get_theme_mod( 'show_preloader', true ) ) {
			switch ( get_theme_mod( 'preloader_style', 'signal' ) ) {
				case 'spinner':
					echo '<div class="vlt-site-preloader"><div class="vlt-site-preloader__inner"><div class="spinner"></div></div></div>';
					break;
				case 'signal':
					echo '<div class="vlt-site-preloader"><div class="vlt-site-preloader__inner"><div class="signal"></div></div></div>';
					break;
				case 'double':
					echo '<div class="vlt-site-preloader"><div class="vlt-site-preloader__inner"><div class="double"></div></div></div>';
					break;
				case 'wordpress':
					echo '<div class="vlt-site-preloader"><div class="vlt-site-preloader__inner"><div class="wordpress"><span></span></div></div></div>';
					break;
				case 'image':
					echo '<div class="vlt-site-preloader"><div class="vlt-site-preloader__inner"><img src="'.get_theme_mod( 'preloader_image', VINERO_THEME_DIRECTORY . 'assets/img/preloader.gif' ).'" alt="'.get_bloginfo( 'name' ).'"></div></div>';
					break;
			}
		}

		echo '<div class="' . vinero_sanitize_class( $class ) . '">';

	}
}
add_action( 'vinero/before_site', 'vinero_before_site' );

# After site
if ( ! function_exists( 'vinero_after_site' ) ) {
	function vinero_after_site() {
		echo '</div>';
	}
}
add_action( 'vinero/after_site', 'vinero_after_site' );

# Before main
if ( ! function_exists( 'vinero_before_main_content' ) ) {
	function vinero_before_main_content() {
		echo '<div class="vlt-entry-content">';
	}
}
add_action( 'vinero/before_main_content', 'vinero_before_main_content' );

# After main
if ( ! function_exists( 'vinero_after_main_content' ) ) {
	function vinero_after_main_content() {
		echo '</div>';
	}
}
add_action( 'vinero/after_main_content', 'vinero_after_main_content' );

# Back to top
if ( ! function_exists( 'vinero_site_backtotop' ) ) {
	function vinero_site_backtotop() {
		if ( false === vinero_get_button_top() ) {
			return;
		}
		echo '<a href="#" class="vlt-back-to-top hidden"><i class="icofont icofont-rounded-up"></i></a>';
	}
}
add_action( 'vinero/site_backtotop', 'vinero_site_backtotop' );

# Change admin logo
if ( ! function_exists( 'vinero_change_admin_logo' ) ) {
	function vinero_change_admin_logo() {
		if ( '' === get_theme_mod( 'login_logo_image', VINERO_THEME_DIRECTORY . 'assets/img/vlthemes.png' ) ) {
			return;
		}
		$image_url = get_theme_mod( 'login_logo_image', VINERO_THEME_DIRECTORY . 'assets/img/vlthemes.png' );
		$image_w   = get_theme_mod( 'login_logo_image_width', '102px' );
		$image_h   = get_theme_mod( 'login_logo_image_height', '115px' );
		echo '<style type="text/css">
			h1 a {
				background: transparent url(' . esc_url( $image_url ) . ') 50% 50% no-repeat !important;
				width:' . esc_attr( $image_w ) . '!important;
				height:' . esc_attr( $image_h ) . '!important;
				background-size: cover !important;
			}
		</style>';
	}
}
add_action( 'login_head', 'vinero_change_admin_logo' );