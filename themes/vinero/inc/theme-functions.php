<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Sanitize class
if ( ! function_exists( 'vinero_sanitize_class' ) ) {
	function vinero_sanitize_class( $class, $fallback = null ) {

		if ( is_string( $class ) ) {
			$class = explode( ' ', $class );
		}
		if ( is_array( $class ) && count( $class ) > 0 ) {
			$class = array_map( 'sanitize_html_class', $class );
			return implode( ' ', $class );
		} else {
			return sanitize_html_class( $class, $fallback );
		}

	}
}

# Sanitize style
if ( ! function_exists( 'vinero_sanitize_style' ) ) {
	function vinero_sanitize_style( $style ) {

		$allowed_html = array(
			'style' => array ()
		);
		return wp_kses( $style, $allowed_html );

	}
}

# Override header
if ( ! function_exists( 'vinero_get_header_layout' ) ) {
	function vinero_get_header_layout() {

		global $post;
		if ( is_search() || !( isset( $post->ID ) ) ) {
			return get_theme_mod( 'header_layout', 'fullscreen' );
		}
		$result = false;
		if ( class_exists( 'acf' ) ) {
			$result = get_field( 'override_header', $post->ID );
		}
		if ( '' == $result || false == $result || 'none' == $result ) {
			$result = get_theme_mod( 'header_layout', 'fullscreen' );
		}
		return $result;

	}
}

# Override header sticky
if ( ! function_exists( 'vinero_get_header_sticky' ) ) {
	function vinero_get_header_sticky() {

		global $post;

		$result = false;
		if ( class_exists( 'acf' ) ) {
			$result = get_field( 'override_header_sticky' );
			if ( $result == 'disable' ) {
				return false;
			} elseif ( $result == 'enable' ) {
				return true;
			}
		}
		if ( '' == $result || false == $result || 'none' == $result ) {
			$result = get_theme_mod( 'header_sticky_mode', false );
		}
		return $result;

	}
}

# Override footer
if ( ! function_exists( 'vinero_get_footer_layout' ) ) {
	function vinero_get_footer_layout() {

		global $post;
		if ( is_search() || !( isset( $post->ID ) ) ) {
			return get_theme_mod( 'footer_layout', 'minimal' );
		}
		$result = false;
		if ( class_exists( 'acf' ) ) {
			$result = get_field( 'override_footer' );
		}
		if ( '' == $result || false == $result || 'none' == $result ) {
			$result = get_theme_mod( 'footer_layout', 'minimal' );
		}
		return $result;

	}
}

# Override back to top
if ( ! function_exists( 'vinero_get_button_top' ) ) {
	function vinero_get_button_top() {

		global $post;
		if ( is_search() || !( isset( $post->ID ) ) ) {
			return get_theme_mod( 'show_back_to_top', true );
		}
		$result = false;
		if ( class_exists( 'acf' ) ) {
			$result = get_field( 'override_back_to_top' );
			if ( $result == 'hide' ) {
				return false;
			} elseif ( $result == 'show' ) {
				return true;
			}
		}
		if ( '' == $result || false == $result || 'none' == $result ) {
			$result = get_theme_mod( 'show_back_to_top', true );
		}
		return $result;

	}
}

# Blog pagination
if ( ! function_exists( 'vinero_get_pagination' ) ) {
	function vinero_get_pagination( $query = null, $paginated = 'numeric' ) {

		if ( $query == null ) {
			global $wp_query;
			$query = $wp_query;
		}

		$page  = $query->query_vars['paged'];
		$pages = $query->max_num_pages;
		$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );

		if ( $page == 0 ) {
			$page = 1;
		}

		$output = '';

		if ( $pages > 1 ) {

			if ( $paginated == 'paged' ) {
				$output .= '<nav class="vlt-pagination vlt-pagination--paged">';
				$output .= '<ul>';
				if ( $page + 1 <= $pages ) {
					$output .= '<li class="prev-page"><a href="' . get_pagenum_link( $page + 1 ) . '"><i class="icofont icofont-rounded-left"></i><span>'.esc_html__( 'Prev', 'vinero' ).'</span></a></li>';
				} else {
					$output .= '<li class="prev-page inactive"></li>';
				}
				if ( $page - 1 >= 1 ) {
					$output .= '<li class="next-page"><a href="' . get_pagenum_link( $page - 1 ) . '"><i class="icofont icofont-rounded-right"></i><span>'.esc_html__( 'Next', 'vinero' ).'</span></a></li>';
				} else {
					$output .= '<li class="next-page inactive"></li>';
				}
				$output .= '</ul>';
				$output .= '</nav>';
			}

			if ( $paginated == 'numeric' ) {
				$numeric_links = paginate_links( array(
					'foramt' => '',
					'add_args' => '',
					'current' => $paged,
					'total' => $pages,
					'prev_text' => esc_html__( 'Prev', 'vinero' ),
					'next_text' => esc_html__( 'Next', 'vinero' ),
				) );
				$output .= '<nav class="vlt-pagination vlt-pagination--numeric">';
				$output .= $numeric_links;
				$output .= '</nav>';
			}

			if ( $paginated == 'load-more' ) {
				$output .= '<nav class="vlt-pagination vlt-pagination--load-more"><a href="#" class="vlt-btn vlt-btn--secondary vlt-btn--xs vlt-btn--rounded"><i class="icofont icofont-spinner icofont-rotate"></i><span></span></a></nav>';
				$output .= vinero_load_more_btn( $query );
			}

		}
		return apply_filters( 'vinero/pagination', $output );
	}
}

# Trim limit text
if ( ! function_exists( 'vinero_limit_text' ) ) {
	function vinero_limit_text( $content = false, $max_words = 18 ) {

		if ( $content == false ) {
			return;
		}
		$content = preg_replace( "~(?:\[/?)[^/\]]+/?\]~s", '', $content );
		$content = strip_tags( $content );
		$words = explode( ' ', $content, $max_words + 1 );
		if ( count( $words ) > $max_words ) {
			array_pop( $words );
			array_push( $words, '...', '' );
		}
		$content = implode( ' ', $words );
		$content = esc_html( $content );

		return $content;

	}
}

# Post taxonomy
if ( ! function_exists( 'vinero_get_post_taxonomy' ) ) {
	function vinero_get_post_taxonomy( $post_id, $taxonomy, $delimiter = ', ', $get = 'name', $link = true ) {

		$tags = wp_get_post_terms( $post_id, $taxonomy );
		$list = '';
		foreach ( $tags as $tag ) {
			if ( $link ) {
				$list .= '<a href="' . get_category_link( $tag->term_id ) . '">' . $tag->$get . '</a>' . $delimiter;
			} else {
				$list .= $tag->$get . $delimiter;
			}
		}
		return substr( $list, 0, strlen( $delimiter ) * ( -1 ) );

	}
}

# Comment navigation
if ( ! function_exists( 'vinero_comment_pagination' ) ) {
	function vinero_comment_pagination() {

		$output = '';

		if ( get_comment_pages_count() > 1 ):
			$output .= '<nav class="vlt-comments-navigation">';
			if ( get_previous_comments_link() ) {
				add_filter( 'previous_comments_link_attributes', function() {
					return 'class="prev-page"';
				} );
				$output .= get_previous_comments_link( '<i class="icofont icofont-arrow-left"></i>' );
			}
			if ( get_next_comments_link() ) {
				add_filter( 'next_comments_link_attributes', function() {
					return 'class="next-page"';
				} );
				$output .= get_next_comments_link( '<i class="icofont icofont-arrow-right"></i>' );
			}
			$output .= '</nav>';
		endif;

		return apply_filters( 'vinero/comment_pagination', $output );

	}
}

# Custom comment
if ( ! function_exists( 'vinero_custom_comment' ) ) {
	function vinero_custom_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		global $post;
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
				<ul class="vlt-comment-content__buttons vlt-secondary-font">
					<?php edit_comment_link( esc_html__( 'Edit', 'vinero' ), '<li class="vlt-comment-edit-link">', '</li>' ); ?>

					<?php
						comment_reply_link( array_merge( $args, array(
							'add_below' => 'comment',
							'depth' => $depth,
							'max_depth' => $args['max_depth'],
							'before' => '<li class="vlt-comment-reply-link">',
							'after' => '</li>'
						) ) );
					?>
				</ul>

			</div>
		<!-- </li> is added by WordPress automatically -->
		<?php
	}
}

# Post Thumbnail
if ( ! function_exists( 'vinero_get_post_thumbnail' ) ) {
	function vinero_get_post_thumbnail( $format = 'standard', $size = 'vinero-standard' ){

		global $post;
		$output = '';
		$primary_image = wp_get_attachment_image( get_post_thumbnail_id( $post->ID ), $size, '', array( 'class' => '' ) );


		if( $format == 'video' ) {
			if ( class_exists( 'acf' ) && get_field( 'post_video_link' ) ) :
				$output .= get_field( 'post_video_link' );
			endif;

		} elseif ( $format == 'audio' ) {
			if ( class_exists( 'acf' ) ) :
				$type = get_field( 'post_audio_type' );
				switch ( $type ) {
					case 'url':
						$output .= get_field( 'post_audio_url' );
						break;
					case 'local':
						$output .= $primary_image;
						$output .= do_shortcode( '[audio src="'.get_field( 'post_audio_local' ).'"]' );
						break;
				}
			endif;
		} elseif ( $format == 'gallery' ) {

			$output .= '<div class="vlt-slick-slider">';
			$output .= '<div class="vlt-click-notify">'.esc_html__( 'Click', 'vinero' ).'</div>';
			$output .= '<div class="vlt-slick-slider__inner">';

			$output .= $primary_image;

			if ( class_exists( 'acf' ) ) {
				$images = get_field( 'post_gallery_images' );

				if ( $images ) :
					foreach ( $images as $image ) :
					$output .= wp_get_attachment_image( $image['ID'], $size );
					endforeach;
				endif;
			}

			$output .= '</div>';
			$output .= '</div>';

		} else {
			$output .= $primary_image;
		}
		return $output;
	}
}

# Post navigation
if ( ! function_exists( 'vinero_get_post_navigation' ) ) {
	function vinero_get_post_navigation() {

		$nextPost = get_adjacent_post( false, '', true );
		$prevPost = get_adjacent_post( false, '', false );
		$output   = '';

		if ( empty( $prevPost ) && empty( $nextPost ) ) {
			return;
		}

		$output .= '<div class="vlt-post-navigation">';
		$output .= '<div class="row">';

		$output .= '<div class="col-md-6">';
		if ( !empty( $prevPost ) ) {
			$output .= '<div class="prev clearfix">';
			$output .= '<a href="' . get_permalink( $prevPost->ID ) . '"><i class="icofont icofont-rounded-left"></i></a>';
			$output .= '</div>';
		}
		$output .= '</div>';

		$output .= '<div class="col-md-6">';
		if ( !empty( $nextPost ) ) {
			$output .= '<div class="next clearfix">';
			$output .= '<a href="' . get_permalink( $nextPost->ID ) . '"><i class="icofont icofont-rounded-right"></i></a>';
			$output .= '</div>';
		}
		$output .= '</div>';

		$output .= '</div>';
		$output .= '</div>';

		return apply_filters( 'vinero/get_post_navigation', $output );
	}
}

# Portfolio navigation
if ( ! function_exists( 'vinero_get_portfolio_navigation' ) ) {
	function vinero_get_portfolio_navigation() {

		$nextPost = get_adjacent_post( false, '', true );
		$prevPost = get_adjacent_post( false, '', false );
		$output = '';
		$output .= '<nav class="vlt-portfolio-navigation">';

		$output .= '<div class="container">';
		$output .= '<div class="row align-items-center">';

		$output .= '<div class="col-5 text-left">';
		if ( !empty( $nextPost ) ) {
			$output .= '<a class="prev-work" href="'.get_permalink( $nextPost->ID ).'"><i class="icofont icofont-rounded-left"></i>'.esc_html__( 'Prev Work', 'vinero' ).'</a>';
		}
		$output .= '</div>';

		$output .= '<div class="col-2 text-center lh-reset">';
		if ( get_theme_mod( 'portfolio_link') ) {
			$output .= '<a class="all-works" href="'.get_permalink(get_theme_mod( 'portfolio_link')).'"><span></span><span></span><span></span><span></span></a>';
		}
		$output .= '</div>';

		$output .= '<div class="col-5 text-right">';
		if ( !empty( $prevPost ) ) {
			$output .= '<a class="next-work" href="'.get_permalink( $prevPost->ID ).'">'.esc_html__( 'Next Work', 'vinero' ).'<i class="icofont icofont-rounded-right"></i></a>';
		}
		$output .= '</div>';

		$output .= '</div>';
		$output .= '</div>';
		$output .= '</nav>';

		return apply_filters( 'vinero/get_portfolio_navigation', $output );

	}
}

# Post views
if ( ! function_exists( 'vinero_set_post_views' ) ) {
	function vinero_set_post_views( $postID ) {

		$count_key = 'vinero_post_views_count';
		$count = get_post_meta( $postID, $count_key, true );
		if ( $count == '' ) {
			$count = 0;
			delete_post_meta( $postID, $count_key );
			add_post_meta( $postID, $count_key, '0' );
		} else {
			$count++;
			update_post_meta( $postID, $count_key, $count );
		}

	}
}
add_action( 'wp_head', 'vinero_track_post_views' );

if ( ! function_exists( 'vinero_track_post_views' ) ) {
	function vinero_track_post_views( $postID ) {

		if ( !is_single() ) {
			return;
		}
		if ( empty( $postID ) ) {
			global $post;
			$postID = $post->ID;
		}
		vinero_set_post_views( $postID );

	}
}

if ( ! function_exists( 'vinero_get_post_views' ) ) {
	function vinero_get_post_views( $postID ) {
		$count_key = 'vinero_post_views_count';
		$count = get_post_meta( $postID, $count_key, true );
		if ( $count == '' ) {
			delete_post_meta( $postID, $count_key );
			add_post_meta( $postID, $count_key, '0' );
			return '0';
		}
		return $count;
	}
}