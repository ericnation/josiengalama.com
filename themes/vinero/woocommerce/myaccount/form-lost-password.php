<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
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
 * @version 3.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_lost_password_form' );

?>

<div class="vlt-lost-password-wrap">

	<h1><?php esc_html_e( 'Lost Password', 'vinero' ); ?></h1>

	<form method="post" class="vlt-lost-password">

		<p>
			<?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'vinero' ) ); ?>
		</p>


		<label for="user_login"><?php esc_html_e( 'Username or email', 'vinero' ); ?></label>
		<div class="vlt-form-group">
			<input type="text" name="user_login" id="user_login" />
		</div>


		<?php do_action( 'woocommerce_lostpassword_form' ); ?>

		<input type="hidden" name="wc_reset_password" value="true" />
		<input type="submit" class="vlt-btn vlt-btn--primary block" value="<?php esc_attr_e( 'Reset password', 'vinero' ); ?>" />

		<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>


	</form>
</div>

<?php
	do_action( 'woocommerce_after_lost_password_form' );