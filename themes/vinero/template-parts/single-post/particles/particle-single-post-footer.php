<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<?php if ( function_exists( 'vlthemes_get_post_share_buttons' ) && get_theme_mod( 'post_social_share', true ) ) : ?>
	<div class="vlt-post-share">
		<h5><?php esc_html_e( 'Share:', 'vinero' ); ?></h5>
		<?php echo vlthemes_get_post_share_buttons( get_the_ID() ); ?>
	</div>
	<!-- /.vlt-post-share -->
<?php endif; ?>

<?php if ( get_the_tags() && get_theme_mod( 'post_tags', true ) ) : ?>
	<div class="vlt-post-tags">
		<h5><?php esc_html_e( 'Tags:', 'vinero' ); ?></h5>
		<?php the_tags( '', '', '' ); ?>
	</div>
	<!-- /.vlt-post-tags -->
<?php endif; ?>