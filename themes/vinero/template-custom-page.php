<?php

/**
 * Template Name: Custom Page
 * @author: VLThemes
 * @version: 1.0
 */

get_header();

?>

<main class="vlt-main">
	<div class="container">
		<?php
			while ( have_posts() ) : the_post();
				get_template_part ('template-parts/content/content', 'custom-page' );
			endwhile;
		?>
	</div>
</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>