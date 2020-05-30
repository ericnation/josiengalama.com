<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

get_header(); the_post(); ?>

<?php

	$post_sidebar_position = 'right-sidebar';

	if ( class_exists( 'acf' ) ) {
		$post_sidebar_position = get_field( 'post_sidebar_position', get_queried_object_id() ) ? get_field( 'post_sidebar_position', get_queried_object_id() ) : $post_sidebar_position;
	}
	if ( get_theme_mod( 'post_page_title', true ) ) {
		get_template_part( 'template-parts/page-title/page-title-blog', get_theme_mod( 'blog_title_layout', 'hero' ) );
	}

?>

<main class="vlt-main vlt-main--padding">

	<?php get_template_part( 'template-parts/single-post/post', $post_sidebar_position ); ?>

	<?php
		if ( get_theme_mod( 'post_navigation', true ) ) {
			echo vinero_get_post_navigation();
		}
	?>

</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>