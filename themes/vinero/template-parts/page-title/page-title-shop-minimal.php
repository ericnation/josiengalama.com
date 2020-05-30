<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$page_title = get_theme_mod( 'shop_title', esc_html__( 'Online Store', 'vinero' ) );
$page_subtitle = get_theme_mod( 'shop_subtitle' );

$page_bg_img = get_theme_mod( 'shop_bg' );

$class = $page_bg_img ? 'vlt-minimal-title jarallax' : 'vlt-minimal-title';

?>

<div class="<?php echo vinero_sanitize_class( $class ); ?>">

	<?php if ( $page_bg_img ) : ?>
		<img src="<?php echo esc_url( $page_bg_img ); ?>" alt="" class="jarallax-img">
	<?php endif; ?>

	<div class="vlt-minimal-title__content">
		<h1><?php echo esc_html( $page_title ); ?></h1>
		<?php
			if ( $page_subtitle ) {
				echo '<p>'.esc_html( $page_subtitle ).'</p>';
			} else {
				woocommerce_breadcrumb();
			}
		?>
	</div>

</div>
<!--/.vlt-minimal-title-->