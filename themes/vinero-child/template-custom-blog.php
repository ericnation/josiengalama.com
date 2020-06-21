<?php

/**
 * Template Name: Custom Blog Template
 * @author: Eric Nation
 * @version: 1.0
 */

get_header();
get_template_part( 'template-parts/page-title/page-title-blog-page', 'hero' );
?>

<main class="vlt-main">
	<div class="container">
		<?php
      while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/content/content-profile-section' );
      the_content();
      echo '<div class="clearfix"></div>';
			endwhile;
		?>
	</div>
</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>