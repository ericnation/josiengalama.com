<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$appearance_effect = get_theme_mod( 'appearance_effect', false );

?>

<div class="masonry clearfix" data-masonry-col="2" data-appearance-effect="<?php echo esc_attr( $appearance_effect ); ?>">
	<div class="gutter-sizer"></div>
	<div class="grid-sizer"></div>

	<?php
		while ( have_posts() ) : the_post();
			$format = get_post_format();
			if ( false == $format ){
				$format = 'standard';
			}
			echo '<div class="grid-item">';
			get_template_part( 'template-parts/post/post-style-masonry', $format );
			echo '</div>';
		endwhile;
	?>
</div>
<!-- /.masonry -->