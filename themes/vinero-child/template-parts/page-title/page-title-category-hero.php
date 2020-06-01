<?php

/**
 * @author: Eric Nation
 * @version: 1.0
 */

$page_title = '';
$page_subtitle = '';
$term = get_queried_object() ?? [];
$page_bg_img = get_theme_mod( 'archive_bg' );
$featured_image = get_field( 'category_image', $term ) ?? [];

if( is_category() ) {
	$page_title .= get_category( get_query_var( 'cat' ) )->name ?? '';
	$page_subtitle .= get_category( get_query_var( 'cat' ) )->description ?? '';
}

$class = $featured_image || $page_bg_img ? 'vlt-hero-title jarallax' : 'vlt-hero-title';
?>

<div class="<?php echo vinero_sanitize_class( $class ); ?>">

	<?php if ( $featured_image ) : ?>
		<img
			src="<?php echo esc_url( $featured_image['url'] ); ?>"
			alt="<?php echo esc_attr($featured_image['alt']); ?>"
			class="jarallax-img">
	<?php endif; ?>
	<?php if ( !$featured_image && $page_bg_img ) : ?>
		<img src="<?php echo esc_url( $page_bg_img ); ?>" alt="" class="jarallax-img">
	<?php endif; ?>

	<div class="vlt-hero-title__content">
		<h1><?php echo esc_html( $page_title ); ?></h1>
    <?php if ( $page_subtitle ) : ?>
      <?php echo html_entity_decode( stripslashes( $page_subtitle ) ); ?>
    <?php endif; ?>

	</div>
</div>
<!--/.vlt-hero-title-->