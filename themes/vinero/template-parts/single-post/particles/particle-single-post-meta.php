<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<div class="vlt-post-meta">
	<?php if ( vinero_get_post_taxonomy( get_the_ID(), 'category' ) ) : ?>
		<span><i class="icofont icofont-folder-open"></i><?php echo vinero_get_post_taxonomy( get_the_ID(), 'category' ); ?></span>
	<?php endif; ?>
	<span><i class="icofont icofont-user-male"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span>
	<span><i class="icofont icofont-eye-alt"></i><?php echo vinero_get_post_views( get_the_ID() ); ?></span>
</div>
<!-- /.vlt-post-meta -->