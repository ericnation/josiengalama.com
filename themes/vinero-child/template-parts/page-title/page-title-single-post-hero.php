<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$pub_date      = get_the_date();
$author_name   = get_the_author();
$page_subtitle = 'by ' . $author_name . ' - ' . $pub_date;
$size          = 'vinero-standard';

$format = get_post_format();
if ( false == $format ){
	$format = 'standard';
}

$featured_bg_img = wp_get_attachment_image( get_post_thumbnail_id( $post->ID ), 'full', '', array( 'class' => 'jarallax-img' ) );

$class = $featured_bg_img ? 'vlt-hero-title jarallax' : 'vlt-hero-title';

?>

<div class="<?php echo vinero_sanitize_class( $class ); ?>">

	<?php if ( $featured_bg_img && has_post_thumbnail() ) : ?>
		<?php echo $featured_bg_img ?>
	<?php endif; ?>

	<div class="vlt-hero-title__content">
		<h1><?php echo the_title(); ?></h1>
		<p><?php echo esc_html( $page_subtitle ); ?></p>
	</div>

</div>
<!--/.vlt-hero-title-->