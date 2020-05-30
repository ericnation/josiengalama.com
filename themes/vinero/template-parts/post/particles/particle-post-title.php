<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<h3 class="vlt-post-title"><a href="<?php the_permalink(); ?>"><?php if ( is_sticky( get_the_ID() ) ) { echo '<i class="vlt-text-color fa fa-bookmark-o"></i>'; } the_title(); ?></a></h3>
<!-- /.vlt-post-title -->
