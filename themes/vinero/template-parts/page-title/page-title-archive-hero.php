<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$page_title = '';
$page_subtitle = '';

if( is_category() ) {

	$page_title .= esc_html__( 'Categories Archives', 'vinero' ) ;
	$page_subtitle .= esc_html__( ' in ', 'vinero' ) . get_category( get_query_var( 'cat' ) )->name;

} else if( is_author() ) {

	$page_title .= esc_html__( 'Author Archives', 'vinero' );
	$page_subtitle .= esc_html__( ' from ', 'vinero' ) . get_userdata( get_query_var( 'author' ) )->display_name;


} else if( is_tag() ) {

	$page_title .= esc_html__( 'Tags Archives', 'vinero' );
	$page_subtitle .= esc_html__( ' in ', 'vinero' ) . single_tag_title('', false);

} else if( is_day() ) {

	$page_title .= esc_html__( 'Daily Archives', 'vinero' );
	$page_subtitle .= esc_html__( ' in ', 'vinero' ) . get_the_date();

} else if( is_month() ) {

	$page_title .= esc_html__( 'Monthly Archives', 'vinero' );
	$page_subtitle .= esc_html__( ' in ', 'vinero' ) . get_the_date( 'F Y' );

} else if( is_year() ) {

	$page_title .= esc_html__( 'Yearly Archives', 'vinero' );
	$page_subtitle .= esc_html__( ' in ', 'vinero' ) . get_the_date( 'Y' );

}

$page_bg_img = get_theme_mod( 'archive_bg' );

$class = $page_bg_img ? 'vlt-hero-title jarallax' : 'vlt-hero-title';

?>

<div class="<?php echo vinero_sanitize_class( $class ); ?>">

	<?php if ( $page_bg_img ) : ?>
		<img src="<?php echo esc_url( $page_bg_img ); ?>" alt="" class="jarallax-img">
	<?php endif; ?>

	<div class="vlt-hero-title__content">
		<h1><?php echo esc_html( $page_title ); ?></h1>
		<p><?php echo esc_html( $page_subtitle ); ?></p>
	</div>

</div>
<!--/.vlt-hero-title-->