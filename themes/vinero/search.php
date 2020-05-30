<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

get_header(); ?>

<?php

	get_template_part( 'template-parts/page-title/page-title-search', get_theme_mod( 'search_title_layout', 'hero' ) );

	$blog_layout = get_theme_mod( 'search_layout', 'default' );
	$blog_type_pagination = get_theme_mod( 'search_type_pagination', 'numeric' );

	$column_sidebar_class = 'col-md-4';
	$column_content_class = 'col-md-8';
	$column_sidebar_class .= get_theme_mod( 'sticky_sidebar_effect', false ) ? ' vlt-column-sticky-sidebar' : '';
	$column_content_class .= get_theme_mod( 'sticky_sidebar_effect', false ) ? ' vlt-column-sticky-content' : '';

	$post_list_class = ' vlt-posts-'.$blog_layout.'-container';
	$post_list_class .= ' vlt-pagination-'.$blog_type_pagination.'-container';
	$post_list_class .= ' clearfix';

?>

<main class="vlt-main vlt-main--padding">
	<div class="container">

		<div class="row">

			<div class="<?php echo vinero_sanitize_class( $column_content_class ); ?>">
				<div class="<?php echo vinero_sanitize_class( $post_list_class ); ?>">
					<?php
						if ( have_posts() ):
							get_template_part( 'template-parts/loop/loop-blog', $blog_layout );
							echo vinero_get_pagination( null, $blog_type_pagination );
						else:
							get_template_part( 'template-parts/content/content', 'empty' );
						endif;
					?>
				</div>
			</div>
			<!-- /.col-md-9 -->

			<div class="<?php echo vinero_sanitize_class( $column_sidebar_class ); ?>">
				<div class="vlt-sidebar vlt-sidebar--right">
					<?php get_sidebar(); ?>
				</div>
			</div>
			<!-- /.col-md-3 -->

		</div>

	</div>
</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>