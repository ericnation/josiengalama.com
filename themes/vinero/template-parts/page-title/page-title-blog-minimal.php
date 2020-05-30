<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$page_title = get_theme_mod( 'blog_title', esc_html__( 'Recent News', 'vinero' ) );
$page_subtitle = get_theme_mod( 'blog_subtitle', esc_html__( 'Read the latest news and stories.', 'vinero' ) );

$page_bg_img = get_theme_mod( 'blog_bg' );

$class = $page_bg_img ? 'vlt-minimal-title jarallax' : 'vlt-minimal-title';

?>

<div class="<?php echo vinero_sanitize_class( $class ); ?>">

	<?php if ( $page_bg_img ) : ?>
		<img src="<?php echo esc_url( $page_bg_img ); ?>" alt="" class="jarallax-img">
	<?php endif; ?>

	<div class="vlt-minimal-title__content">
		<h1><?php echo esc_html( $page_title ); ?></h1>
		<p><?php echo esc_html( $page_subtitle ); ?></p>
	</div>

</div>
<!--/.vlt-minimal-title-->