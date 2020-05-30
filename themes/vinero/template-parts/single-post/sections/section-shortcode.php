<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$after_post_shortcode = get_theme_mod( 'after_post_shortcode' );

if ( $after_post_shortcode ) : ?>
	<div class="vlt-after-post-shortcode">
		<?php echo do_shortcode( html_entity_decode( $after_post_shortcode ) ); ?>
	</div>
<?php endif; ?>