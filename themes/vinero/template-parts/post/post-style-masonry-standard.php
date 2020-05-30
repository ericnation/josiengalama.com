<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$size = 'vinero-masonry';

$format = get_post_format();
if ( false == $format ){
	$format = 'standard';
}

?>

<article <?php post_class( 'vlt-post vlt-post--style-masonry' ); ?> id="post-<?php the_ID(); ?>">


	<?php if ( has_post_thumbnail() ) : ?>

		<div class="vlt-post-thumbnail clearfix">
			<?php echo vinero_get_post_thumbnail( $format, $size ); ?>
			<?php get_template_part( 'template-parts/post/particles/particle', 'thumbnail-link' ); ?>
		</div>
		<!-- /.vlt-post-thumbnail -->

	<?php endif; ?>

	<div class="vlt-post-content">

		<header class="vlt-post-header">

			<?php get_template_part( 'template-parts/post/particles/particle', 'post-title' ); ?>
			<?php get_template_part( 'template-parts/post/particles/particle', 'post-meta-small' ); ?>

		</header>
		<!-- /.vlt-post-header -->

		<div class="vlt-post-excerpt">
			<?php echo vinero_limit_text( get_the_content(), 22 ); ?>
		</div>
		<!-- /.vlt-post-excerpt -->

		<footer class="vlt-post-footer">
			<?php get_template_part( 'template-parts/post/particles/particle', 'post-read-more' ); ?>
		</footer>
		<!-- /.vlt-post-footer -->

	</div>
	<!-- /.vlt-post-content -->

</article>
<!-- /.vlt-post -->