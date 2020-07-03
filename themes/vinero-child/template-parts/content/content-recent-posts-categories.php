<?php

/**
 * @author: Eric Nation
 * @version: 1.0
 */


$recent_categories = get_field( 'recent_categories', $post_id ) ?? [];
global $post;
// Loop over recent categories and get the recent posts for each one.
?>
<div class="row">
  <div class="col-sm-12 text-center">
    <h2 class="text-center"><?php echo esc_html_e( 'Latest articles per category', 'vinero' ); ?></h2>
  </div>
</div>
<?php
  foreach( $recent_categories as $category ) :
    $args = [
      'category' => $category->term_id,
      'suppress_filters' => true,
      'numberposts' => 5,
    ];
    $recent_posts     = get_posts( $args ) ?? [];
    $most_recent_post = [ array_shift( $recent_posts ) ] ?? [];
    ?>
    <div class="row">
      <div class="col-sm-12">
        <h3><?php echo esc_html( $category->name ); ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <?php
        if ( $most_recent_post ) :
          foreach( $most_recent_post as $post ) :
            setup_postdata( $post );
            $format = get_post_format();
            if ( false == $format ) {
              $format = 'standard';
            }
            get_template_part( 'template-parts/post/post-style-default', $format );
          endforeach;
          wp_reset_postdata();
        endif;
        ?>
      </div>
      <div class="col-sm-5">
        <?php
          if ( $recent_posts ) {
            foreach( $recent_posts as $post ) :
              setup_postdata( $post );
              $format_recent = get_post_format();
              if ( false == $format_recent ) {
                $format_recent = 'standard';
              }
              ?>
              <div class="row m-b-20">
                <div class="col-xs-12 col-sm-6 recent-img-col">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <div class="vlt-post-thumbnail clearfix">
                      <?php echo vinero_get_post_thumbnail( $format_recent, 'small' ); ?>
                      <?php get_template_part( 'template-parts/post/particles/particle', 'thumbnail-link' ); ?>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <?php get_template_part( 'template-parts/post/particles/particle', 'post-title-small' ); ?>
                  <?php get_template_part( 'template-parts/post/particles/particle', 'post-meta-extra-small' ); ?>
                </div>
              </div>
              <?php
            endforeach;
            wp_reset_postdata();
          }
          ?>
      </div>
    </div>
    <div class="row m-t-40 m-b-40">
      <div class="col-sm-12 text-center">
        <a
          href="<?php echo get_site_url() . '/' . esc_html( $category->slug ); ?>"
          class="vlt-btn--sm vlt-btn--rounded vlt-btn vlt-btn--primary">
          <?php echo wp_sprintf( '%1$s %2$s %3$s', __( 'View all', 'vinero' ), $category->name , 'posts' ); ?>
        </a>
      </div>
    </div>
    <?php
  endforeach;
