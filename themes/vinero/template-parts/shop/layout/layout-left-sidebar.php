<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$column_sidebar_class = 'col-md-4 pull-md-8';
$column_content_class = 'col-md-8 push-md-4';
$column_sidebar_class .= get_theme_mod( 'sticky_sidebar_effect', false ) ? ' vlt-column-sticky-sidebar' : '';
$column_content_class .= get_theme_mod( 'sticky_sidebar_effect', false ) ? ' vlt-column-sticky-content' : '';

?>

<div class="container">
	<div class="row">

		<div class="<?php echo vinero_sanitize_class( $column_content_class ); ?>">
			<?php get_template_part( 'template-parts/shop/loop/loop', 'default' ); ?>
		</div>
		<!-- /.col-md-8 -->

		<div class="<?php echo vinero_sanitize_class( $column_sidebar_class ); ?>">
			<div class="vlt-sidebar vlt-sidebar--left">
				<?php get_sidebar( 'shop' ); ?>
			</div>
		</div>
		<!-- /.col-md-4 -->

	</div>
</div>
<!-- /.container -->