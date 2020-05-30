<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$appearance_effect = get_theme_mod( 'appearance_effect', false );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );

?>

<div class="vlt-shop-loop-header">
	<?php do_action( 'woocommerce_before_shop_loop' ); ?>
</div>

<div class="masonry clearfix" data-masonry-col="<?php echo get_option( 'woocommerce_catalog_columns' ); ?>" data-appearance-effect="<?php echo esc_attr( $appearance_effect ); ?>">
	<div class="gutter-sizer"></div>
	<div class="grid-sizer"></div>
	<?php
		while ( have_posts() ) : the_post();
			echo '<div class="grid-item">';
			get_template_part( 'woocommerce/content', 'product' );
			echo '</div>';
		endwhile;
	?>
</div>
<!-- /.masonry -->

<?php do_action( 'woocommerce_after_shop_loop' ); ?>