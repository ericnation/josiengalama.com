<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $upsells ) : ?>

	<section class="vlt-up-sells-products">

		<h4 class="vlt-up-sells-products__title"><?php esc_html_e( 'You may also like', 'vinero' ); ?><span></span></h4>

		<?php woocommerce_product_loop_start(); ?>

			<div class="row">

				<?php foreach ( $upsells as $upsell ) : ?>

					<div class="col-md-3 col-sm-6">

					<?php
					 	$post_object = get_post( $upsell->get_id() );

						setup_postdata( $GLOBALS['post'] =& $post_object );

						wc_get_template_part( 'content', 'product' ); ?>

					</div>

				<?php endforeach; ?>
			</div>

		<?php woocommerce_product_loop_end(); ?>

	</section>

<?php endif;

wp_reset_postdata();
