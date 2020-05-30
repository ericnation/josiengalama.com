<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<div class="vlt-post-meta vlt-post-meta--extra-small">
	<span><i class="icofont icofont-clock-time"></i><time datetime="<?php the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time></span>
	<span><i class="icofont icofont-flash"></i><?php echo vinero_get_post_views( get_the_ID() ) . esc_html__( ' Views', 'vinero' ); ?></span>
</div>
<!-- /.vlt-post-meta -->