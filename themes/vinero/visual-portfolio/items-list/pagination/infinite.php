<?php
/**
 * Infinite pagination template.
 *
 * @var $args
 * @package visual-portfolio
 */

?>

<ul class="<?php echo esc_attr( $args['class'] ); ?> vp-pagination__style-vinero vlt-secondary-font" data-vp-pagination-type="<?php echo esc_attr( $args['type'] ); ?>">
	<li class="vp-pagination__item">
		<a class="vp-pagination__load-more vlt-btn vlt-btn--secondary vlt-btn--xs vlt-btn--rounded" href="<?php echo esc_url( $args['next_page_url'] ); ?>">
			<span><?php echo esc_html( $args['text_load'] ); ?></span>
			<span class="vp-pagination__load-more-loading"><i class="icofont icofont-spinner icofont-rotate"></i><?php echo esc_html( $args['text_loading'] ); ?></span>
			<span class="vp-pagination__load-more-no-more"><?php echo esc_html( $args['text_end_list'] ); ?></span>
		</a>
	</li>
</ul>
