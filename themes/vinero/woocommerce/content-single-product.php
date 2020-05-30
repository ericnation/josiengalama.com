<?php
/**
* The template for displaying product content in the single-product.php template
*
* This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
* @version     3.4.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

?>

<?php
/**
* woocommerce_before_single_product hook.
*
* @hooked wc_print_notices - 10
*/
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}

?>

<article <?php post_class( 'vlt-product vlt-product--style-default' ); ?> id="product-<?php the_ID(); ?>">

	<div class="row">

		<div class="col-md-6">
			<div class="vlt-product-thumbnail">
				<?php
					/**
					* woocommerce_before_single_product_summary hook.
					*
					* @hooked woocommerce_show_product_sale_flash - 10
					* @hooked woocommerce_show_product_images - 20
					*/
					do_action( 'woocommerce_before_single_product_summary' );
				?>
			</div>
			<!-- /.vlt-product-thumbnail -->
		</div>

		<div class="col-md-6">
			<div class="vlt-product-summary">

				<div class="vlt-out-of-stock vlt-first-font">
					<?php
						if ( !$product->is_in_stock() ) {
							echo '<i class="icofont icofont-cart"></i>' . esc_html__( 'Out of stock', 'vinero' );
						} else {
							echo '<i class="icofont icofont-cart"></i>' . esc_html__( 'In stock', 'vinero' );
						}
					?>
				</div>
				<!-- /.vlt-out-of-stock -->

				<?php
					/**
					* woocommerce_single_product_summary hook.
					*
					* @hooked woocommerce_template_single_title - 5
					* @hooked woocommerce_template_single_rating - 10
					* @hooked woocommerce_template_single_price - 10
					* @hooked woocommerce_template_single_excerpt - 20
					* @hooked woocommerce_template_single_add_to_cart - 30
					* @hooked woocommerce_template_single_meta - 40
					* @hooked woocommerce_template_single_sharing - 50
					* @hooked WC_Structured_Data::generate_product_data() - 60
					*/

					do_action( 'woocommerce_single_product_summary' );
				?>

			</div>
			<!-- /.vlt-product-summary -->
		</div>

		<div class="col-md-12">
			<?php
				/**
				* woocommerce_after_single_product_summary hook.
				*
				* @hooked woocommerce_output_product_data_tabs - 10
				* @hooked woocommerce_upsell_display - 15
				* @hooked woocommerce_output_related_products - 20
				*/
				do_action( 'woocommerce_after_single_product_summary' );
			?>
		</div>

	</div>

</article>
<!-- /.vlt-product--style-default -->

<?php

	if ( get_theme_mod( 'product_navigation', true ) ) {
		echo vinero_get_post_navigation();
	}

?>

<?php do_action( 'woocommerce_after_single_product' ); ?>