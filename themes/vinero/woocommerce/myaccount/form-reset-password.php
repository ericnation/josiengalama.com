<?php
/**
 * Lost password reset form.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="vlt-reset-password-wrap">

	<h1><?php esc_html_e( 'Reset Password', 'vinero' ); ?></h1>

	<form method="post" class="vlt-reset-password">

		<p>
			<?php echo apply_filters( 'woocommerce_reset_password_message', __( 'Enter a new password below.', 'vinero' ) ); ?>
		</p>


		<label for="password_1"><?php esc_html_e( 'New password', 'vinero' ); ?> <span class="required">*</span></label>
		<div class="vlt-form-group">
			<input type="password" name="password_1" id="password_1" />
		</div>

		<label for="password_2"><?php esc_html_e( 'Re-enter new password', 'vinero' ); ?> <span class="required">*</span></label>
		<div class="vlt-form-group">
			<input type="password" name="password_2" id="password_2" />
		</div>

		<input type="hidden" name="reset_key" value="<?php echo esc_attr( $args['key'] ); ?>" />
		<input type="hidden" name="reset_login" value="<?php echo esc_attr( $args['login'] ); ?>" />


		<?php do_action( 'woocommerce_resetpassword_form' ); ?>

		<input type="hidden" name="wc_reset_password" value="true" />
		<input type="submit" class="vlt-btn vlt-btn--primary block" value="<?php esc_attr_e( 'Update Password', 'vinero' ); ?>" />

		<?php wp_nonce_field( 'reset_password' ); ?>

	</form>
</div>
