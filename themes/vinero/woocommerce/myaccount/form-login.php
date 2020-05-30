<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
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
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="tabs">

	<ul class="hidden-xs-up">
		<li><a href="#tabs-0"></a></li>
		<li><a href="#tabs-1"></a></li>
	</ul>

	<div class="vlt-form-login-wrap" id="tabs-0">

		<h1><?php esc_html_e( 'Sign In', 'vinero' ); ?></h1>

		<form class="vlt-form-login" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>


				<label for="username"><?php esc_html_e( 'Username or email address', 'vinero' ); ?> <span class="required">*</span></label>
				<div class="vlt-form-group">
					<input type="text" name="username" id="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
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

				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<input type="submit" class="vlt-btn vlt-btn--secondary block" name="login" value="<?php esc_attr_e( 'Sign In', 'vinero' ); ?>" />

			<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
				<div class="vlt-form-login-divider"><span></span><span class="text"><?php esc_html_e( 'or', 'vinero' ); ?></span><span></span></div>
				<a href="#tabs-1" class="vlt-btn vlt-btn--primary block tab-link"><?php esc_html_e( 'Create an account', 'vinero' ); ?></a>
			<?php endif; ?>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>
	</div>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>


	<div class="vlt-form-register-wrap" id="tabs-1">

		<h1><?php esc_html_e( 'Register', 'vinero' ); ?></h1>

		<form class="vlt-form-register" method="post">

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<label for="reg_username"><?php esc_html_e( 'Username', 'vinero' ); ?> <span class="required">*</span></label>
				<div class="vlt-form-group">
					<input type="text" name="username" id="reg_username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
				</div>

			<?php endif; ?>

			<label for="reg_email"><?php esc_html_e( 'Email address', 'vinero' ); ?> <span class="required">*</span></label>
			<div class="vlt-form-group">
				<input type="email" name="email" id="reg_email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( $_POST['email'] ) : ''; ?>" />
			</div>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<label for="reg_password"><?php esc_html_e( 'Password', 'vinero' ); ?> <span class="required">*</span></label>
				<div class="vlt-form-group">
					<input type="password" name="password" id="reg_password" />
				</div>

			<?php endif; ?>

			<!-- Spam Trap -->
			<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php esc_html_e( 'Anti-spam', 'vinero' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" autocomplete="off" /></div>

			<?php do_action( 'woocommerce_register_form' ); ?>


			<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
			<input type="submit" class="vlt-btn vlt-btn--secondary block" name="register" value="<?php esc_attr_e( 'Register', 'vinero' ); ?>" />

			<div class="vlt-form-register-divider"><span></span><span class="text"><?php esc_html_e( 'or', 'vinero' ); ?></span><span></span></div>

			<a href="#tabs-0" class="vlt-btn vlt-btn--primary block tab-link"><?php esc_html_e( 'Sign In', 'vinero' ); ?></a>


			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>


<?php endif; ?>
</div>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
