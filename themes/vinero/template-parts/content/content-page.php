<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

echo '<div class="vlt-content-markup">';

the_content();
echo '<div class="clearfix"></div>';

echo '</div>';

wp_link_pages( array(
	'before' => '<div class="vlt-link-pages"><h5>'.esc_html__( 'Pages: ', 'vinero' ).'</h5>',
	'after' => '</div>',
	'next_or_number' => 'number',
) );

edit_post_link( esc_html__( 'Edit', 'vinero' ), '<span class="vlt-edit-link">', '</span>' );

if ( comments_open() || get_comments_number() ) {
	comments_template();
}