<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$format = get_post_format();
if ( false == $format ){
	$format = 'standard';
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'vlt-post vlt-post--style-single' ); ?>>

	<?php get_template_part( 'template-parts/single-post/particles/particle-single-post', 'media' ); ?>

	<div class="vlt-post-content">

		<header class="vlt-post-header">

			<?php get_template_part( 'template-parts/single-post/particles/particle-single-post', 'title' ); ?>
			<?php get_template_part( 'template-parts/single-post/particles/particle-single-post', 'meta' ); ?>

		</header>
		<!-- /.vlt-post-header -->

		<div class="vlt-post-entry-content vlt-content-markup clearfix">

			<?php

				the_content();

				echo '<div class="clearfix"></div>';

				wp_link_pages( array(
					'before' => '<div class="vlt-link-pages"><h5>'.esc_html__( 'Pages: ', 'vinero' ).'</h5>',
					'after' => '</div>',
					'next_or_number' => 'number',
				) );

				edit_post_link( esc_html__( 'Edit', 'vinero' ), '<span class="vlt-edit-link">', '</span>' );

			?>

		</div>
		<!-- /.vlt-post-entry-content -->

		<footer class="vlt-post-footer">
			<?php get_template_part( 'template-parts/single-post/particles/particle-single-post', 'footer' );  ?>
		</footer>
		<!-- /.vlt-post-footer -->

	</div>
	<!-- /.vlt-post-content -->

</article>
<!-- /.vlt-post--style-single -->