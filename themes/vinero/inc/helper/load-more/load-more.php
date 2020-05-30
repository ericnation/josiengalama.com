<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

# Load more button

function vinero_load_more_btn( $wp_query = null ) {

	if( $wp_query == null ) {
		global $wp_query;
	} else {
		$wp_query = $wp_query;
	}

	$max = $wp_query->max_num_pages;
	$paged = ( get_query_var( 'paged' ) > 1 ) ? get_query_var( 'paged' ) : 1;

	wp_localize_script(
		'vlt-main-script',
		'load_more_btn',
		array(
			'startPage' => $paged,
			'maxPages' => $max,
			'nextLink' => next_posts( $max, false ),
			'text' => esc_html__( 'Load More', 'vinero' ),
			'noMore' => esc_html__( 'No More Posts', 'vinero' ),
			'loading' => esc_html__( 'Loading', 'vinero' ),
		)
	);
}