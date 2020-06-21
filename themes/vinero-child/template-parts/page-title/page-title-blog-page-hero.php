<?php

/**
 * @author: Eric Nation
 * @version: 1.0
 */

$size       = 'vinero-standard';
$hero_title = get_field( 'hero_title', $post_id ) ?? '';

$format = get_post_format();
if ( false == $format ){
	$format = 'standard';
}

$featured_bg_img = wp_get_attachment_image( get_post_thumbnail_id( $post->ID ), 'full', '', array( 'class' => 'jarallax-img' ) );

$class = $featured_bg_img ? 'vlt-hero-title jarallax' : 'vlt-hero-title';

?>

<div class="<?php echo vinero_sanitize_class( $class ); ?> flex-column">

	<?php if ( $featured_bg_img && has_post_thumbnail() ) : ?>
		<?php echo $featured_bg_img ?>
	<?php endif; ?>

	<div class="vlt-hero-title__content blog_hero-title__content no-bg">
		<h1 class="blog-hero-title"><?php echo acf_esc_html( $hero_title ) ?></h1>
	</div>
  <div class="cta-wrap">
    <a
      href="/about-me-online-marketing-specialist/"
      class="vlt-btn--sm vlt-btn--rounded vlt-btn vlt-btn--primary vlt-btn--inverse"
      id="aboutJosienBtn">
      <?php echo esc_html_e( 'About Josien', 'vinero'); ?>
    </a>
    <a
      href="/contact/"
      class="vlt-btn--sm vlt-btn--rounded vlt-btn vlt-btn--primary"
      id="workWithMeBtn">
      <?php echo esc_html_e( 'Work with me', 'vinero'); ?>
    </a>
  </div>

</div>
<!--/.vlt-hero-title-->