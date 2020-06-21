<?php

/**
 * @author: Eric Nation
 * @version: 1.0
 */

$post_id = get_the_ID();
$profile_image = get_field( 'profile_image', $post_id ) ?? [];
$intro_title = get_field( 'intro_title', $post_id ) ?? '';
$intro_paragraph = get_field( 'intro_paragraph', $post_id ) ?? '';

?>
<div class="row">
  <div class="col-sm-2"></div>
  <div class="class-sm-8">
    <h2 class="intro-title"><?php echo esc_html__( $intro_title ); ?></h2>
  </div>
  <div class="col-sm-2"></div>
</div>
<div class="row m-b-40">
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <img src="<?php echo esc_url( $profile_image['url'] ); ?>" />
  </div>
  <div class="col-sm-6">
    <p class="vlt-dropcap vlt-dropcap--border"><?php echo acf_esc_html( $intro_paragraph )?></p>
  </div>
  <div class="col-sm-2"></div>
</div>