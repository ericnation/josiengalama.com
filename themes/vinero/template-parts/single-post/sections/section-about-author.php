<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<div class="vlt-post-about-author">

		<h4><?php the_author_posts_link(); ?></h4>

		<div class="vlt-post-about-author__avatar">
			<?php echo get_avatar( get_the_author_meta( 'email' ), 70 ); ?>
		</div>

		<div class="vlt-post-about-author__content">

			<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<p><?php the_author_meta( 'description' ); ?></p>
			<?php endif; ?>

			<?php if ( get_the_author_meta( 'tumblr' ) || get_the_author_meta( 'instagram' ) || get_the_author_meta( 'twitter' ) || get_the_author_meta( 'google' ) || get_the_author_meta( 'facebook' ) || get_the_author_meta( 'pinterest' ) ): ?>

				<ul class="clearfix">
					<?php if ( get_the_author_meta( 'url' ) ): ?><li><a target="_blank" class="url" href="<?php the_author_meta( 'url' ); ?>"><i class="fa fa-link"></i></a></li><?php endif; ?>

					<?php if ( get_the_author_meta( 'instagram' ) ): ?><li>
						<a target="_blank" class="instagram" href="http://instagram.com/<?php the_author_meta( 'instagram' ); ?>"><i class="fa fa-instagram"></i></a>
					</li><?php endif; ?>

					<?php if ( get_the_author_meta( 'twitter' ) ): ?><li>
						<a target="_blank" class="twitter" href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>"><i class="fa fa-twitter"></i></a>
					</li><?php endif; ?>

					<?php if ( get_the_author_meta( 'facebook' ) ): ?><li>
						<a target="_blank" class="facebook" href="http://facebook.com/<?php the_author_meta( 'facebook' ); ?>"><i class="fa fa-facebook"></i></a>
					</li><?php endif; ?>

					<?php if ( get_the_author_meta( 'pinterest' ) ): ?><li>
						<a target="_blank" class="pinterest" href="http://pinterest.com/<?php the_author_meta( 'pinterest' ); ?>"><i class="fa fa-pinterest"></i></a>
					</li><?php endif; ?>

					<?php if ( get_the_author_meta( 'google' ) ): ?><li>
						<a target="_blank" class="google" href="http://plus.google.com/<?php the_author_meta( 'google' ); ?>?rel=author"><i class="fa fa-google-plus"></i></a>
					</li><?php endif; ?>

					<?php if ( get_the_author_meta( 'tumblr' ) ): ?><li>
						<a target="_blank" class="tumblr" href="http://<?php the_author_meta( 'tumblr' ); ?>.tumblr.com/"><i class="fa fa-tumblr"></i></a>
					</li><?php endif; ?>

				</ul>

			<?php endif; ?>

		</div>

	</div>
<?php endif; ?>