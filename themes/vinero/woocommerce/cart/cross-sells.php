<?php
/**
 * Cross-sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cross-sells.php.
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


if ( $cross_sells ) : ?>
	<section class="vlt-cross-sells-products">

		<h4 class="vlt-cross-sells-products__title"><?php esc_html_e( 'You may be interested in', 'vinero' ); ?><span></span></h4>


		<?php woocommerce_product_loop_start(); ?>

			<div class="row">

				<?php foreach ( $cross_sells as $cross_sell ) : ?>
					<div class="col-md-3 col-sm-6">
						<?php
						 	$post_object = get_post( $cross_sell->get_id() );

							setup_postdata( $GLOBALS['post'] =& $post_object );

							wc_get_template_part( 'content', 'product' ); ?>
					</div>

				<?php endforeach; ?>
			</div>

		<?php woocommerce_product_loop_end(); ?>

	</section>

<?php endif;

wp_reset_postdata();
