<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$size = 'vinero-square';

?>


<article <?php post_class( 'vlt-post vlt-post--style-also-like' ); ?> id="post-<?php the_ID(); ?>">


	<?php if ( has_post_thumbnail() ) : ?>

		<div class="vlt-post-thumbnail">
			<?php echo vinero_get_post_thumbnail( 'standard', $size ); ?>
			<?php get_template_part( 'template-parts/post/particles/particle', 'thumbnail-link' ); ?>
		</div>
		<!-- /.vlt-post-thumbnail -->

	<?php endif; ?>


	<div class="vlt-post-content">

		<header class="vlt-post-header">
			<?php get_template_part( 'template-parts/post/particles/particle', 'post-title-small' ); ?>
			<?php get_template_part( 'template-parts/post/particles/particle', 'post-meta-extra-small' ); ?>
		</header>
		<!-- /.vlt-post-header -->

	</div>
	<!-- /.vlt-post-content -->


</article>
<!-- /.vlt-post -->