<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

if ( post_password_required() ) {
	return;
}

?>

<div class="vlt-comments" id="comments">

	<div class="vlt-comments__list">

		<h4 class="vlt-comments-title"><?php esc_html_e( 'Comments', 'vinero' ); ?></h4>

		<p class="vlt-comments-number">
			<?php comments_number( esc_html__( 'No Comments', 'vinero' ) , esc_html__( 'One Comment', 'vinero' ) , esc_html__( '% Comments', 'vinero' ) ); ?>
		</p>

		<ul class="vlt-comments__list-comments">
			<?php
				wp_list_comments( array(
					'avatar_size' => 50,
					'style' => 'ul',
					'short_ping' => true,
					'reply_text' => esc_html__( 'Reply', 'vinero' ),
					'callback' => 'vinero_custom_comment',
				) );
			?>
		</ul>
		<?php echo vinero_comment_pagination(); ?>

	</div>
	<!-- /.vlt-comments__list -->

	<div class="vlt-comments__reply">

		<?php
			$commenter = wp_get_current_commenter();
			$args = array(
				'class_form' => 'vlt-comment-form',
				'label_submit' => esc_html__( 'Submit Comment', 'vinero' ) ,
				'title_reply' => esc_html__( 'Leave a comment', 'vinero' ) ,
				'title_reply_before' => '<h4 class="vlt-comments-title">',
				'title_reply_after' => '</h4>',
				'cancel_reply_before' => '',
				'cancel_reply_after' => '',
				'title_reply_to' => esc_html__( 'Leave a reply', 'vinero' ) ,
				'cancel_reply_link' => esc_html__( 'Cancel Reply', 'vinero' ),
				'submit_button' => '<button type="submit" id="%2$s" class="%3$s">%4$s</button>',
				'class_submit' => 'vlt-btn vlt-btn--primary vlt-btn--rounded',
				'fields' => vinero_move_comment_field_to_bottom( array(
					'author' => '<div class="vlt-form-group col-4"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="'.esc_attr__( 'Name*', 'vinero' ).'"></div>',
					'email' => '<div class="vlt-form-group col-4"><input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" placeholder="' . esc_attr__( 'E-mail*', 'vinero' ) . '"></div>',
					'url' => '<div class="vlt-form-group col-4"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" placeholder="' . esc_attr__( 'Website', 'vinero' ) . '"></div>',
				) ),
				'comment_field' => '<div class="vlt-form-group"><textarea id="comment" name="comment" rows="6" placeholder="' . esc_attr__( 'Comment', 'vinero' ) . '"></textarea></div>',
			);
			comment_form( $args );
		?>

	</div>
	<!-- /.vlt-comments__reply -->

</div>
<!-- /.vlt-comments -->