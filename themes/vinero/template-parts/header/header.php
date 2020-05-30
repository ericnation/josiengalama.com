<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

get_template_part( 'template-parts/header/header', vinero_get_header_layout() );

?>

<?php if ( VINERO_WOOCOMMERCE && get_theme_mod( 'woocommerce_show_cart' , true ) ) : ?>
	<a href="<?php echo wc_get_cart_url(); ?>" class="vlt-cart-icon">
		<i class="icofont icofont-cart-alt"></i>
	</a>
<?php endif; ?>