<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

get_header();

?>

<?php get_template_part( 'template-parts/page-title/page-title-error', get_theme_mod( 'error_title_layout', 'hero' ) ); ?>

<main class="vlt-main vlt-main--padding">
	<div class="container">
		<?php get_template_part( 'template-parts/content/content', 'empty' ); ?>
	</div>
</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>