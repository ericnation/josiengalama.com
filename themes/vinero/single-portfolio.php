<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

get_header(); the_post(); ?>

<main class="vlt-main">
	<div class="container">
		<?php

			if ( post_password_required() ) {

				get_template_part( 'template-parts/content/content', 'protected' );

			} else {

				get_template_part( 'template-parts/content/content', 'custom-page' );

			}

		?>
	</div>

	<?php
		if ( get_theme_mod( 'portfolio_navigation', true ) ) :
			echo vinero_get_portfolio_navigation();
		endif;
	?>

</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>