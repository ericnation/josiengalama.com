<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
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

do_action( 'woocommerce_before_edit_account_form' ); ?>
<div class="vlt-form-edit-account-wrap">

	<form class="vlt-form-edit-account" action="" method="post">

		<?php do_action( 'woocommerce_edit_account_form_start' ); ?>


			<label for="account_first_name"><?php esc_html_e( 'First name', 'vinero' ); ?> <span class="required">*</span></label>
			<div class="vlt-form-group">
				<input type="text" name="account_first_name" id="account_first_name" value="<?php echo esc_attr( $user->first_name ); ?>" />
			</div>

			<label for="account_last_name"><?php esc_html_e( 'Last name', 'vinero' ); ?> <span class="required">*</span></label>
			<div class="vlt-form-group">
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="<?php echo esc_attr( $user->last_name ); ?>" />
			</div>

			<label for="account_email"><?php esc_html_e( 'Email address', 'vinero' ); ?> <span class="required">*</span></label>
			<div class="vlt-form-group">
				<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" value="<?php echo esc_attr( $user->user_email ); ?>" />
			</div>

			<h4><?php esc_html_e( 'Password change', 'vinero' ); ?></h4>

			<label for="password_current"><?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'vinero' ); ?></label>
			<div class="vlt-form-group">
				<input type="password" name="password_current" id="password_current" />
			</div>
			<label for="password_1"><?php esc_html_e( 'New password (leave blank to leave unchanged)', 'vinero' ); ?></label>
			<div class="vlt-form-group">
				<input type="password" name="password_1" id="password_1" />
			</div>
			<label for="password_2"><?php esc_html_e( 'Confirm new password', 'vinero' ); ?></label>
			<div class="vlt-form-group">
				<input type="password" name="password_2" id="password_2" />
			</div>

		<?php do_action( 'woocommerce_edit_account_form' ); ?>

			<?php wp_nonce_field( 'save_account_details' ); ?>
			<input type="submit" class="vlt-btn vlt-btn--primary" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'vinero' ); ?>" />
			<input type="hidden" name="action" value="save_account_details" />

		<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
	</form>
</div>
<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
