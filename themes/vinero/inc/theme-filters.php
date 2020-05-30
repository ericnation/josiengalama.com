<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Add class to body
if ( ! function_exists( 'vinero_add_body_class' ) ) {
	function vinero_add_body_class( $classes ) {
		$classes[] = '';
		return $classes;
	}
}

# Add class to html
if ( ! function_exists( 'vinero_add_html_class' ) ) {
	function vinero_add_html_class() {

		$classes = '';

		if ( get_theme_mod( 'custom_scrollbar', false ) ) {
			$classes .= ' vlt-custom-scrollbar';
		}

		return vinero_sanitize_class( $classes );

	}
}

# Comments to bottom
if ( ! function_exists( 'vinero_move_comment_field_to_bottom' ) ) {
	function vinero_move_comment_field_to_bottom( $fields ) {
		if ( isset( $fields['comment'] ) ) {
			$comment_field = $fields['comment'];
			unset( $fields['comment'] );
			$fields['comment'] = $comment_field;
		}
		return $fields;
	}
}
add_filter( 'comment_form_fields', 'vinero_move_comment_field_to_bottom' );

# Post password form
if ( ! function_exists( 'vinero_post_password' ) ) {
	function vinero_post_password() {

		global $post;
		$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
		$output = '<form class="vlt-post-password-form" action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
		<p>'.esc_html__( 'This content is password protected. To view it please enter your password below.', 'vinero' ).'</p>
		<div class="vlt-post-password-field">
		<input name="post_password" id="' . $label . '" type="password" size="20" placeholder="' . esc_attr__( 'Password:' , 'vinero' ) . '"><input type="submit" name="Submit" class="vlt-btn vlt-btn--primary block" value="' . esc_html__( 'Submit' , 'vinero' ) . '">
		</div>
		</form>';
		return apply_filters( 'vinero/post_password', $output );

	}
}
add_filter( 'the_password_form', 'vinero_post_password' );

# Admin logo
if ( ! function_exists( 'vinero_change_admin_logo_link' ) ) {
	function vinero_change_admin_logo_link() {
		return home_url( '/' );
	}
}
add_filter( 'login_headerurl', 'vinero_change_admin_logo_link' );

# Fixed FontAwesome
add_filter( 'vpf_enqueue_plugin_font_awesome', '__return_false' );