<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$page_title = get_theme_mod( 'error_title', esc_html__( 'Error 404', 'vinero' ) );
$page_subtitle = get_theme_mod( 'error_subtitle', esc_html__( 'Page not found on server.', 'vinero' ) );
$page_bg_img = get_theme_mod( 'error_bg' );

$class = $page_bg_img ? 'vlt-hero-title jarallax' : 'vlt-hero-title';

?>

<div class="<?php echo vinero_sanitize_class( $class ); ?>">

	<?php if ( $page_bg_img ) : ?>
		<img src="<?php echo esc_url( $page_bg_img ); ?>" alt="" class="jarallax-img">
	<?php endif; ?>

	<div class="vlt-hero-title__content">
		<h1><?php echo esc_html( $page_title ); ?></h1>
		<p><?php echo esc_html( $page_subtitle ); ?></p>
	</div>

</div>
<!--/.vlt-hero-title-->