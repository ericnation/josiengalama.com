<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$page_title = get_the_title();
$page_bg_img = has_post_thumbnail( get_the_ID() );
$class = $page_bg_img ? 'vlt-minimal-title jarallax' : 'vlt-minimal-title';

?>

<div class="<?php echo vinero_sanitize_class( $class ); ?>">

	<?php if ( $page_bg_img ) : ?>
		<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'vinero-full' ); ?>" alt="" class="jarallax-img">
	<?php endif; ?>

	<div class="vlt-minimal-title__content">
		<h1><?php echo esc_html( $page_title ); ?></h1>
		<?php if( class_exists( 'acf' ) && get_field( 'page_subtitle' ) ): ?>
			<p><?php the_field( 'page_subtitle' ); ?></p>
		<?php endif; ?>
	</div>

</div>
<!--/.vlt-minimal-title-->