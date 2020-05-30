<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<header class="vlt-header vlt-header--aside" data-is-sticky="<?php echo vinero_get_header_sticky(); ?>">

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

				<a href="#" id="vlt-aside-menu-toggle" class="vlt-menu-burger" data-before-text="<?php esc_html_e( 'Menu', 'vinero' ); ?>">
					<span class="line line-one"><span class="inner"></span></span>
					<span class="line line-two"><span class="inner"></span></span>
					<span class="line line-three"><span class="inner"></span></span>
				</a>

			</div>

		</div>
	</div>

</header>
<!-- /.vlt-header -->

<div class="vlt-header--aside">
	<nav class="vlt-primary-nav">
		<a href="#" id="vlt-aside-menu-close" class="vlt-menu-burger vlt-menu-burger--opened">
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

<div class="vlt-header--aside-overlay"></div>
