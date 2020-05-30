<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
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

global $product;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
		<div>
			<span class=""><?php esc_html_e( 'SKU: ', 'vinero' ); ?></span>
			<?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'vinero' ); ?>
		</div>
	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<div><span class="">' . _n( 'Category: ', 'Categories: ', count( $product->get_category_ids() ), 'vinero' ) . '</span>', '</div>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<div><span class="">' . _n( 'Tag: ', 'Tags: ', count( $product->get_tag_ids() ), 'vinero' ) . '</span>', '</div>' ); ?>

	<?php if ( function_exists( 'vlthemes_get_post_share_buttons' ) ) : ?>
		<div class="vlt-product-share">
			<span class=""><?php esc_html_e( 'Share: ', 'vinero' ); ?></span>
			<?php echo vlthemes_get_post_share_buttons( get_the_ID() ); ?>
		</div>
		<!-- /.vlt-product-share -->
	<?php endif; ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
