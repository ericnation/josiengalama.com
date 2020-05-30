<?php
/**
 * Login form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( is_user_logged_in() ) {
	return;
}

?>
<form class="vlt-woocommerce-form-login login" method="post" <?php echo ( $hidden ) ? 'style="display:none;"' : ''; ?>>

	<?php do_action( 'woocommerce_login_form_start' ); ?>

	<?php echo ( $message ) ? wpautop( wptexturize( $message ) ) : ''; ?>


		<label for="username"><?php esc_html_e( 'Username or email', 'vinero' ); ?> <span class="required">*</span></label>
		<div class="vlt-form-group">
			<input type="text" name="username" id="username" />
		</div>
		<label for="password"><?php esc_html_e( 'Password', 'vinero' ); ?> <span class="required">*</span></label>
		<div class="vlt-form-group">
			<input type="password" name="password" id="password" />
		</div>

	<?php do_action( 'woocommerce_login_form' ); ?>

	<div class="vlt-form-group">
		<div class="d-flex align-items-center justify-content-between">
			<div class="vlt-custom-checkbox-wrap">
				<input type="checkbox" id="rememberme" name="rememberme" class="vlt-custom-checkbox" value="forever">
				<label for="rememberme" class="vlt-custom-checkbox-label"><?php esc_html_e( 'Remember me', 'vinero' ); ?></label>
			</div>

			<a class="lost_password" href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'vinero' ); ?></a>

		</div>
	</div>

	<?php wp_nonce_field( 'woocommerce-login' ); ?>
	<input type="submit" class="vlt-btn vlt-btn--primary block" name="login" value="<?php esc_attr_e( 'Login', 'vinero' ); ?>" />
	<input type="hidden" name="redirect" value="<?php echo esc_url( $redirect ) ?>" />


	<?php do_action( 'woocommerce_login_form_end' ); ?>

</form>
