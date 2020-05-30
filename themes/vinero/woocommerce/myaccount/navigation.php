<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
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
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<div class="row">
	<div class="col-md-3">


		<div class="vlt-myAccount-profile">
			<?php $current_user = wp_get_current_user(); ?>
			<div class="vlt-myAccount-profile__avatar"><?php echo get_avatar( $current_user->user_email, 70, '', $current_user->display_name ); ?></div>

			<p class="vlt-myAccount-profile__hello"><?php esc_html_e( 'Hello', 'vinero' ); ?> <strong><?php echo $current_user->display_name; ?></strong></p>

		  	<a class="vlt-btn vlt-btn--primary vlt-btn--sm" href="<?php echo esc_url( wc_logout_url( wc_get_page_permalink( 'myaccount' ) ) ); ?>"><?php esc_html_e( 'LOGOUT', 'vinero' ); ?><i class="icofont icofont-logout"></i></a>
		</div>




		<nav class="vlt-myAccount-navigation">
			<ul>
				<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
					<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
						<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><i class="icofont icofont-rounded-right"></i><?php echo esc_html( $label ); ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</nav>



	</div>


<?php do_action( 'woocommerce_after_account_navigation' ); ?>
