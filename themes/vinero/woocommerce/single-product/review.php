<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'vlt-comment-item' ); ?>>

	<div class="vlt-comment-left">


		<?php if ( 0 != $args['avatar_size'] && get_avatar( $comment ) ): ?>
			<a class="vlt-comment-avatar" href="<?php echo get_comment_author_url(); ?>"><?php echo get_avatar( $comment, $args['avatar_size'] ); ?></a>
		<?php endif; ?>

		<div class="vlt-comment-header">

			<h5>
				<?php comment_author(); ?>
			</h5>

			<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>">
				<time datetime="<?php comment_time( 'c' ); ?>">
					<?php echo get_comment_date(); ?>
				</time>
			</a>

			<?php do_action( 'woocommerce_review_before_comment_meta', $comment ); ?>


		</div>
	</div>

	<div class="vlt-comment-content">
		<div class="vlt-comment-text vlt-content-markup">

			<?php comment_text(); ?>

			<?php if ( '0' == $comment->comment_approved ): ?>
				<p class="vlt-alert">
					<?php esc_html_e( 'Your comment is awaiting moderation.', 'vinero' ); ?>
				</p>
			<?php endif; ?>
		</div>

	</div>