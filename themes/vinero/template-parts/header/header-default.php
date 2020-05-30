<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<header class="vlt-header vlt-header--default" data-is-sticky="<?php echo vinero_get_header_sticky(); ?>">
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

				<div class="hidden-md-down">
					<nav class="vlt-primary-nav vlt-secondary-font">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary-menu',
								'depth' => 3,
								'menu_class' => 'sf-menu',
								'fallback_cb' => 'vinero_fallback_menu',
							) );
						?>
					</nav>
				</div>

				<div class="hidden-lg-up">
					<a href="#" id="vlt-mobile-menu-toggle" class="vlt-menu-burger">
						<span class="line line-one"><span class="inner"></span></span>
						<span class="line line-two"><span class="inner"></span></span>
						<span class="line line-three"><span class="inner"></span></span>
					</a>
				</div>

			</div>

		</div>
	</div>

	<div class="hidden-lg-up">
		<nav class="vlt-mobile-nav vlt-secondary-font">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary-menu',
					'depth' => 3,
					'menu_class' => 'sf-menu',
					'fallback_cb' => 'vinero_fallback_menu',
				) );
			?>
		</nav>
	</div>


</header>
<!-- /.vlt-header -->
