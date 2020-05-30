<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<form id="searchform" class="vlt-search-form" method="get" action="<?php echo esc_url( home_url( '/' )) ; ?>">
	<div class="vlt-form-group">
		<input type="text" id="s" name="s" class="vlt-form-control" placeholder="<?php esc_attr_e( 'Search...', 'vinero' ); ?>">
		<button><?php esc_html_e( 'Go', 'vinero' ); ?></button>
	</div>
	<input type="hidden" name="post_type" value="product">
</form>
<!-- /.vlt-search-form -->