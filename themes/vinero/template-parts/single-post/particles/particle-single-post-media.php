<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$size = 'vinero-standard';

$format = get_post_format();
if ( false == $format ){
	$format = 'standard';
}

?>

<?php if ( has_post_thumbnail() ) : ?>

	<div class="vlt-post-thumbnail clearfix">
		<?php echo vinero_get_post_thumbnail( $format, $size ); ?>
	</div>
	<!-- /.vlt-post-thumbnail -->

<?php endif; ?>