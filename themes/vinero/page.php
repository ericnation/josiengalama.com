<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-title/page-title-page', get_theme_mod( 'page_title_layout', 'hero' ) ); ?>

<main class="vlt-main-holder vlt-main--padding">
	<div class="container">
		<?php
			while ( have_posts() ) : the_post();
				get_template_part ('template-parts/content/content', 'page' );
			endwhile;
		?>
	</div>
</main>

<?php get_footer(); ?>