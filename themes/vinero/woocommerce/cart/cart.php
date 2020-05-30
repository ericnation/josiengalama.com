<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
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

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' );

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10 );

add_action( 'woocommerce_cross_sell_display_output', 'woocommerce_cross_sell_display' );
add_action( 'woocommerce_cart_totals_output', 'woocommerce_cart_totals', 10 );

?>

<div class="row">
	<div class="col-md-8">

		<div class="vlt-woocommerce-cart-form-wrap">

			<h4 class="vlt-shop-title"><?php esc_html_e( 'Shopping Cart', 'vinero' ); ?></h4>


			<form class="vlt-woocommerce-cart-form woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
				<?php do_action( 'woocommerce_before_cart_table' ); ?>


				<div class="vlt-cart-table woocommerce-cart-form__contents">
					<?php do_action( 'woocommerce_before_cart_contents' ); ?>

					<?php
					foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
						$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
						$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

						if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
							$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
							?>
							<div class="vlt-cart-table__product <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

								<div class="vlt-product-content">
									<div class="vlt-product-thumbnail">
										<?php
											$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

											echo $thumbnail;

											echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
												'<span class="product-remove"><a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a></span>',
												esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
												__( 'Remove this item', 'vinero' ),
												esc_attr( $product_id ),
												esc_attr( $_product->get_sku() )
											), $cart_item_key );

										?>
									</div>
									<div class="vlt-product-info">
										<?php
											echo '<h5>';
											if ( ! $product_permalink ) {
												echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;';
											} else {
												echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key );
											}
											echo '</h5>';

											// Meta data
											echo wc_get_formatted_cart_item_data( $cart_item );

											// Backorder notification
											if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
												echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'vinero' ) . '</p>';
											}
										?>


										<?php
											if ( $_product->is_sold_individually() ) {
												$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
											} else {
												$product_quantity = woocommerce_quantity_input( array(
													'input_name'  => "cart[{$cart_item_key}][qty]",
													'input_value' => $cart_item['quantity'],
													'max_value'   => $_product->get_max_purchase_quantity(),
													'min_value'   => '0',
												), $_product, false );
											}

											echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
										?>

									</div>
								</div>

								<div class="vlt-product-subtotal">
									<?php
										echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
									?>
								</div>

							</div>
						<?php
						}
					}
					?>

					<?php do_action( 'woocommerce_cart_contents' ); ?>

					<div class="vlt-cart-table__footer">

						<?php if ( wc_coupons_enabled() ) { ?>
							<div class="coupon hidden-xs-up">
								<label for="coupon_code"><?php _e( 'Coupon:', 'vinero' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'vinero' ); ?>" /> <input type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'vinero' ); ?>" />
								<?php do_action( 'woocommerce_cart_coupon' ); ?>
							</div>
						<?php } ?>

						<a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="vlt-btn vlt-btn--primary"><?php esc_html_e( 'Continue Shopping', 'vinero' ); ?></a>
						<input type="submit" class="vlt-btn vlt-btn--secondary" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'vinero' ); ?>" />

						<?php do_action( 'woocommerce_cart_actions' ); ?>
						<?php wp_nonce_field( 'woocommerce-cart' ); ?>

					</div>

					<?php do_action( 'woocommerce_after_cart_contents' ); ?>

				</div>

				<?php do_action( 'woocommerce_after_cart_table' ); ?>

			</form>

		</div>
		<!-- /.vlt-woocommerce-cart-form-wrap -->

	</div>
	<!-- /.col-md-8 -->

	<div class="col-md-4">

		<div class="vlt-cart-collaterals cart-collaterals">

			<h4 class="vlt-shop-title"><?php esc_html_e( 'Summary', 'vinero' ); ?></h4>

			<?php if ( wc_coupons_enabled() ) { ?>
			<div class="vlt-toggle-tab">

				<div class="vlt-toggle-tab__header">
					<a href="#"><?php esc_html_e( 'Enter Coupon', 'vinero' ); ?></a>
				</div>

				<div class="vlt-toggle-tab__content">

					<div class="vlt-coupon-code">

						<div class="vlt-form-group">
							<input type="text" name="coupon_code" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'vinero' ); ?>" />
						</div>
						<input type="submit" class="vlt-btn vlt-btn--primary block" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'vinero' ); ?>" />
						<?php do_action( 'woocommerce_cart_coupon' ); ?>

					</div>

				</div>

			</div>
		<?php } ?>

			<div class="cart_totals">
				<?php do_action( 'woocommerce_cart_totals_output' ); ?>
			</div>

		</div>


	</div>
	<!-- /.col-md-4 -->

	<div class="col-md-12">
		<?php do_action( 'woocommerce_cross_sell_display_output' ); ?>
	</div>

</div>
<!-- /.row -->


<?php do_action( 'woocommerce_after_cart' ); ?>
