<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<div class="container">
	<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'woocommerce/content', 'single-product' );
		endwhile;
	?>
</div>
<!-- /.container -->