<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<header class="vlt-header vlt-header--fullscreen" data-is-sticky="<?php echo vinero_get_header_sticky(); ?>">

	<div class="container">
		<div class="vlt-header__inner d-flex align-items-center justify-content-between">

			<div class="d-flex">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="vlt-header__logo">
					<?php if ( get_theme_mod( 'header_default_logo' ) ) : ?>
						<img src="<?php echo get_theme_mod( 'header_default_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					<?php else: ?>
						<h2><?php bloginfo( 'name' ); ?></h2>
					<?php endif; ?>
				</a>

			</div>

			<div class="d-flex align-items-center">

				<div class="hidden-lg-up">
					<a href="#" id="vlt-mobile-menu-toggle" class="vlt-menu-burger">
						<span class="line line-one"><span class="inner"></span></span>
						<span class="line line-two"><span class="inner"></span></span>
						<span class="line line-three"><span class="inner"></span></span>
					</a>
				</div>

				<div class="hidden-md-down">
					<a href="#" id="vlt-fullscreen-menu-toggle" class="vlt-menu-burger" data-before-text="<?php esc_html_e( 'Menu', 'vinero' ); ?>">
						<span class="line line-one"><span class="inner"></span></span>
						<span class="line line-two"><span class="inner"></span></span>
						<span class="line line-three"><span class="inner"></span></span>
					</a>
				</div>

			</div>

		</div>
	</div>

	<div class="hidden-lg-up">
		<nav class="vlt-mobile-nav">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary-menu',
					'depth' => 3,
					'menu_class' => 'sf-menu',
					'fallback_cb' => 'vinero_fallback_menu'
				) );
			?>
		</nav>

	</div>

</header>
<!-- /.vlt-header -->



<div class="hidden-md-down">
	<div class="vlt-header--fullscreen">
		<nav class="vlt-primary-nav">
			<a href="#" id="vlt-fullscreen-menu-close" class="vlt-menu-burger vlt-menu-burger--opened">
				<span class="line line-one"><span class="inner"></span></span>
				<span class="line line-two"><span class="inner"></span></span>
				<span class="line line-three"><span class="inner"></span></span>
			</a>

			<div>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary-menu',
						'depth' => 3,
						'menu_class' => 'sf-menu',
						'fallback_cb' => 'vinero_fallback_menu'
					) );

					if ( has_nav_menu( 'header-socials' ) ) {
						wp_nav_menu( array(
							'menu_class' => 'vlt-header-socials',
							'theme_location' => 'header-socials',
							'depth' => 1,
							'walker' => new Nav_With_Icon_Walker()
						) );
					}
				?>
			</div>

		</nav>
	</div>
</div>