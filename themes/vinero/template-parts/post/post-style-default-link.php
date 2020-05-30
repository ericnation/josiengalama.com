<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$size = 'vinero-standard';

$format = get_post_format();
if ( false == $format ){
	$format = 'standard';
}

?>

<article <?php post_class( 'vlt-post vlt-post--style-default' ); ?> id="post-<?php the_ID(); ?>">

	<div class="vlt-post-content">


		<header class="vlt-post-header">

			<div class="vlt-post-icon">
				<a href="<?php the_permalink(); ?>"><i class="icofont icofont-link-alt"></i></a>
			</div>

		</header>
		<!-- /.vlt-post-header -->

		<div class="vlt-post-excerpt">
			<?php get_template_part( 'template-parts/post/particles/particle', 'post-title' ); ?>
		</div>
		<!-- /.vlt-post-excerpt -->

		<footer class="vlt-post-footer">
			<?php if ( class_exists( 'acf' ) ) : ?>
				<a href="<?php the_field( 'post_link_url' ); ?>>"><?php the_field( 'post_link_text' ); ?></a>
			<?php endif; ?>
		</footer>
		<!-- /.vlt-post-footer -->

	</div>
	<!-- /.vlt-post-content -->

</article>
<!-- /.vlt-post -->