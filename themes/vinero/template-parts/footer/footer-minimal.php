<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<footer class="vlt-footer vlt-footer--minimal text-center">
	<div class="vlt-footer__inner">

		<div class="vlt-footer__top">
			<div class="container">

				<?php if ( get_theme_mod( 'footer_logo', true ) ): ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="vlt-footer__logo">
						<?php if ( get_theme_mod( 'header_default_logo' ) ) : ?>
							<img src="<?php echo get_theme_mod( 'header_default_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
						<?php else: ?>
							<h2><?php bloginfo( 'name' ); ?></h2>
						<?php endif; ?>
					</a>
					<!-- /.vlt-footer__logo -->
				<?php endif; ?>

				<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>

					<div class="vlt-footer__menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth' => 1
							) );
						?>
					</div>
					<!-- /.vlt-footer__menu -->

				<?php endif; ?>

				<?php if ( get_theme_mod( 'footer_copyright' ) ) : ?>

					<p class="vlt-footer__copyright"><?php echo get_theme_mod( 'footer_copyright' ); ?></p>
					<!-- /.vlt-footer__copyright -->

				<?php endif ?>

			</div>
		</div>
	</div>

</footer>
<!-- /.vlt-footer -->