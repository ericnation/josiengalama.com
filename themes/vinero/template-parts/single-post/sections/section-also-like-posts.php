<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<div class="vlt-post-also-like-posts">

	<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 3,
			'meta_key' => 'vinero_post_views_count',
			'orderby' => 'meta_value_num',
			'order' => 'DESC',
			'post__not_in' => array( get_the_ID() ),
			'ignore_sticky_posts' => true,
		);
		$new_query = new WP_Query( $args );
	?>

	<h4><?php esc_html_e( 'You may also like', 'vinero' ); ?></h4>

	<div class="row">
		<?php
			if ( $new_query->have_posts() ): while ( $new_query->have_posts() ): $new_query->the_post();
				echo '<div class="col-md-4">';
				get_template_part( 'template-parts/post/post-style', 'also-like' );
				echo '</div>';
			endwhile; endif;
			wp_reset_postdata();
		?>
	</div>

</div>
<!-- /.vlt-post-also-like-posts -->