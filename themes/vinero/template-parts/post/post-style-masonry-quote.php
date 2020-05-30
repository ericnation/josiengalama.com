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

	<div class="vlt-post-content">


		<header class="vlt-post-header">

			<div class="vlt-post-icon">
				<a href="<?php the_permalink(); ?>"><i class="icofont icofont-quote-right"></i></a>
			</div>

		</header>
		<!-- /.vlt-post-header -->

		<div class="vlt-post-excerpt">
			<?php if ( class_exists( 'acf' ) ) : ?>
				<blockquote><?php the_field( 'post_quote_text' ); ?></blockquote>
			<?php endif; ?>
		</div>
		<!-- /.vlt-post-excerpt -->

		<footer class="vlt-post-footer">
			<?php if ( class_exists( 'acf' ) ) : ?>
				<a href="<?php the_permalink(); ?>"><?php the_field( 'post_quote_author' ); ?></a>
			<?php endif; ?>
		</footer>
		<!-- /.vlt-post-footer -->

	</div>
	<!-- /.vlt-post-content -->

</article>
<!-- /.vlt-post -->