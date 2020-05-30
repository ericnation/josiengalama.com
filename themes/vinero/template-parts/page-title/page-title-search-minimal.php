<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$page_bg_img = get_theme_mod( 'search_bg' );

$class = $page_bg_img ? 'vlt-minimal-title jarallax' : 'vlt-minimal-title';

?>

<div class="<?php echo vinero_sanitize_class( $class ); ?>">

	<?php if ( $page_bg_img ) : ?>
		<img src="<?php echo esc_url( $page_bg_img ); ?>" alt="" class="jarallax-img">
	<?php endif; ?>

	<div class="vlt-minimal-title__content">
		<h1><?php esc_html_e( 'Search Results', 'vinero' ); ?></h1>
		<p><?php echo get_search_query(); ?></p>
	</div>

</div>
<!--/.vlt-minimal-title-->