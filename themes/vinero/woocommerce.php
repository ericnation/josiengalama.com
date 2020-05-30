<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-title/page-title-shop', get_theme_mod( 'shop_title_layout', 'hero' ) ); ?>

<main class="vlt-main vlt-main--padding">
	<?php
		if ( is_singular() ) {
			get_template_part( 'template-parts/shop/product-style', 'single' );
		} else {
			get_template_part( 'template-parts/shop/layout/layout', get_theme_mod( 'woocommerce_layout', 'right-sidebar' ) );
		}
	?>
</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>