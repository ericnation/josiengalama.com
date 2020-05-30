<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

$footer_columns = get_theme_mod( 'footer_columns', 3 );

switch ( $footer_columns ) {
	case 1:
		$column_class = 'col-md-12';
		break;
	case 2:
		$column_class = 'col-md-6';
		break;
	case 3:
		$column_class = 'col-md-4';
		break;
	case 4:
		$column_class = 'col-lg-3 col-md-6 col-sm-6';
		break;
}

?>

<footer class="vlt-footer vlt-footer--widget">
	<div class="vlt-footer__inner">
		<div class="vlt-footer__top">

			<div class="container">

				<div class="vlt-footer__widgets">
					<div class="row">
						<?php
							for ( $i = 1; $i < $footer_columns + 1; $i++ ) {
								if ( is_active_sidebar( 'footer_sidebar_' . $i ) ) {
									echo '<div class="'.vinero_sanitize_class( $column_class ).'">';
									dynamic_sidebar( 'footer_sidebar_' . $i );
									echo '</div>';
								}
							}
						?>
					</div>
				</div>
				<!-- /.vlt-footer__widgets -->

			</div>
		</div>
		<!-- /.vlt-footer__top -->

		<div class="vlt-footer__bottom">

			<div class="container">

				<div class="vlt-footer__bottom-content">

					<?php if ( get_theme_mod( 'footer_copyright' ) ) : ?>

						<p class="vlt-footer__copyright"><?php echo get_theme_mod( 'footer_copyright' ); ?></p>
						<!-- /.vlt-footer__copyright -->

					<?php endif ?>

					<?php if ( has_nav_menu( 'footer-socials' ) ) : ?>

						<div class="vlt-footer__socials">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'footer-socials',
									'depth' => 1
								) );
							?>
						</div>
						<!-- /.vlt-footer__socials -->

					<?php endif; ?>

				</div>

			</div>

		</div>
		<!-- /.vlt-footer__bottom -->
	</div>

</footer>
<!-- /.vlt-footer -->