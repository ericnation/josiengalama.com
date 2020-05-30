<?php
/**
 * The template for displaying product widget entries
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.5.2
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;


if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}

?>

<li>
	<article <?php post_class( 'vlt-widget-product' ); ?> id="post-<?php the_ID(); ?>">
		<?php echo $product->get_image(); ?>
		<div class="vlt-product-content">
			<h4 class="vlt-product-title"><a href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo $product->get_name(); ?></a></h4>
			<?php if ( ! empty( $show_rating ) ) : ?>
				<div class="vlt-product-rating">
				<?php echo wc_get_rating_html( $product->get_average_rating() ); ?>
				</div>
			<?php endif; ?>

			<div class="vlt-product-price">
				<?php echo $product->get_price_html(); ?>
			</div>
		</div>
	</article>
</li>
