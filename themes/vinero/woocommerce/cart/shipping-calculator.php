<?php
/**
 * Shipping Calculator
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/shipping-calculator.php.
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
 * @version     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

do_action( 'woocommerce_before_shipping_calculator' ); ?>

<form class="vlt-woocommerce-shipping-calculator woocommerce-shipping-calculator" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

		<div class="vlt-form-group">
			<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
				<option value=""><?php esc_html_e( 'Select a country&hellip;', 'vinero' ); ?></option>
				<?php
					foreach ( WC()->countries->get_shipping_countries() as $key => $value ) {
						echo '<option value="' . esc_attr( $key ) . '"' . selected( WC()->customer->get_shipping_country(), esc_attr( $key ), false ) . '>' . esc_html( $value ) . '</option>';
					}
				?>
			</select>
		</div>

		<?php if ( apply_filters( 'woocommerce_shipping_calculator_enable_state', true ) ) : ?>

		<div class="vlt-form-group">
			<?php
				$current_cc = WC()->customer->get_shipping_country();
				$current_r  = WC()->customer->get_shipping_state();
				$states     = WC()->countries->get_states( $current_cc );

				// Hidden Input
				if ( is_array( $states ) && empty( $states ) ) {

					?><input type="hidden" name="calc_shipping_state" id="calc_shipping_state" placeholder="<?php esc_attr_e( 'State / County', 'vinero' ); ?>" /><?php

				// Dropdown Input
				} elseif ( is_array( $states ) ) {

					?><span>
						<select name="calc_shipping_state" class="state_select" id="calc_shipping_state" placeholder="<?php esc_attr_e( 'State / County', 'vinero' ); ?>">
							<option value=""><?php esc_html_e( 'Select a state&hellip;', 'vinero' ); ?></option>
							<?php
								foreach ( $states as $ckey => $cvalue ) {
									echo '<option value="' . esc_attr( $ckey ) . '" ' . selected( $current_r, $ckey, false ) . '>' . esc_html( $cvalue ) . '</option>';
								}
							?>
						</select>
					</span><?php

				// Standard Input
				} else {

					?><input type="text" value="<?php echo esc_attr( $current_r ); ?>" placeholder="<?php esc_attr_e( 'State / County', 'vinero' ); ?>" name="calc_shipping_state" id="calc_shipping_state" /><?php

				}
			?>
		</div>

		<?php endif; ?>

		<?php if ( apply_filters( 'woocommerce_shipping_calculator_enable_city', false ) ) : ?>

			<div class="vlt-form-group">
				<input type="text" value="<?php echo esc_attr( WC()->customer->get_shipping_city() ); ?>" placeholder="<?php esc_attr_e( 'City', 'vinero' ); ?>" name="calc_shipping_city" id="calc_shipping_city" />
			</div>

		<?php endif; ?>

		<?php if ( apply_filters( 'woocommerce_shipping_calculator_enable_postcode', true ) ) : ?>

			<div class="vlt-form-group">
				<input type="text" value="<?php echo esc_attr( WC()->customer->get_shipping_postcode() ); ?>" placeholder="<?php esc_attr_e( 'Postcode / ZIP', 'vinero' ); ?>" name="calc_shipping_postcode" id="calc_shipping_postcode" />
			</div>

		<?php endif; ?>

		<button type="submit" name="calc_shipping" value="1" class="vlt-btn vlt-btn--primary block"><?php esc_html_e( 'Update totals', 'vinero' ); ?></button>

		<?php wp_nonce_field( 'woocommerce-cart' ); ?>
</form>

<?php do_action( 'woocommerce_after_shipping_calculator' ); ?>
