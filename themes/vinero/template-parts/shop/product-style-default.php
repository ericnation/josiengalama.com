<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

global $product;
$woocommerce_catalog_mode = get_theme_mod( 'woocommerce_catalog_mode', false );
$attachment_ids = $product->get_gallery_image_ids();
$size = 'vinero-full';
$productID = get_the_ID();

?>

<article <?php post_class( 'vlt-product vlt-product--style-default' ); ?> id="product-<?php the_ID(); ?>">

	<?php

		if ( $attachment_ids ) {
			$loop = 0;
			foreach ( $attachment_ids as $attachment_id ) {
				$image_link = wp_get_attachment_url( $attachment_id );
				if ( !$image_link ) continue;
				$loop++;
				$product_thumbnail_second = wp_get_attachment_image_src( $attachment_id, $size );
				if ( $loop == 1 ) break;
			}
		}
		$product_thumbnail_second_style = '';
		if ( isset ( $product_thumbnail_second[0] ) ) {
			$product_thumbnail_second_style = 'style="background-image: url('.$product_thumbnail_second[0].')"';
		}
	?>

	<div class="vlt-product-thumbnail">

		<a class="vlt-product-thumbnail__link" href="<?php the_permalink(); ?>"></a>
		<!-- /.vlt-product-thumbnail__link -->

		<?php
			if ( has_post_thumbnail() ) {
				echo '<div class="vlt-product-thumbnail__secondary" '. vinero_sanitize_style( $product_thumbnail_second_style ).'></div>';
				echo woocommerce_get_product_thumbnail();
			} else {
				echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="">', wc_placeholder_img_src() ), $productID );
			}

			if ( ! $woocommerce_catalog_mode ) {
				get_template_part( 'woocommerce/loop/sale-flash' );
			}
		?>

	</div>
	<!-- /.vlt-product-thumbnail -->


	<div class="vlt-product-content">

		<h3 class="vlt-product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
		<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>

		<?php if ( ! $woocommerce_catalog_mode ) : ?>
			<div class="vlt-product-price">
				<?php do_action( 'woocommerce_template_loop_price_output' ); ?>
			</div>

			<?php
				echo apply_filters( 'woocommerce_loop_add_to_cart_link',
					sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
						esc_url( $product->add_to_cart_url() ),
						esc_attr( isset( $quantity ) ? $quantity : 1 ),
						esc_attr( $product->get_id() ),
						esc_attr( $product->get_sku() ),
						implode( ' ', array_filter( array(
							'',
							$product->is_purchasable() && $product->is_in_stock() ? 'vlt-add-to-cart-button add_to_cart_button' : '',
							$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
						) ) ),
						'<i class="icofont icofont-cart"></i>'
					),
				$product );
			?>
		<?php endif; ?>

	</div>
	<!-- /.vlt-product-content -->

</article>
<!-- /.vlt-product--style-default -->