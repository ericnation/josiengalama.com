<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

get_template_part( 'template-parts/single-post/post', 'single' );

if ( get_theme_mod( 'post_about_author', true ) ) {
	get_template_part( 'template-parts/single-post/sections/section', 'about-author' );
}

get_template_part( 'template-parts/single-post/sections/section', 'shortcode' );

if ( get_theme_mod( 'also_like_posts', false ) ) {
	get_template_part( 'template-parts/single-post/sections/section', 'also-like-posts' );
}

if ( comments_open() || get_comments_number() ) {
	comments_template();
}