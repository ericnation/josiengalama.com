<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Remove WooCommerce styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

# Empty message for an empty cart
if ( ! function_exists( 'vinero_empty_cart_message' ) ) {
	function vinero_empty_cart_message() {
		return '';
	}
}
add_filter( 'wc_empty_cart_message', 'vinero_empty_cart_message' );

# 5 cols gallery
if ( ! function_exists( 'vinero_5_columns_product_gallery' ) ) {
	function vinero_5_columns_product_gallery( $wrapper_classes ) {
		$columns = 5;
		$wrapper_classes[2] = 'woocommerce-product-gallery--columns-' . absint( $columns );
		return $wrapper_classes;
	}
}

add_filter( 'woocommerce_single_product_image_gallery_classes', 'vinero_5_columns_product_gallery' );

# Max upsells Products
if ( ! function_exists( 'vinero_max_upsell_products' ) ) {
	function vinero_max_upsell_products( $args ) {
		$args['posts_per_page'] = 4;
		return $args;
	}
}
add_filter( 'woocommerce_output_related_products_args', 'vinero_max_upsell_products' );

# Max crossells Products
if ( ! function_exists( 'vinero_max_crosssell_products' ) ) {
	function vinero_max_crosssell_products( $total ) {
		$total = '4';
		return $total;
	}
}
add_filter( 'woocommerce_cross_sells_total', 'vinero_max_crosssell_products' );

# Max related Products
if ( ! function_exists( 'vinero_related_products_args' ) ) {
	function vinero_related_products_args( $args ) {
		$args['posts_per_page'] = 4;
		return $args;
	}
}
add_filter( 'woocommerce_output_related_products_args', 'vinero_related_products_args' );

# Images sizes

add_filter( 'woocommerce_get_image_size_single', function( $size ) {
	return array(
		'width' => 600,
		'height' => 600,
		'crop' => 1,
	);
} );

add_filter( 'woocommerce_get_image_size_thumbnail', function( $size ) {
	return array(
		'width' => 600,
		'height' => 600,
		'crop' => 1,
	);
} );