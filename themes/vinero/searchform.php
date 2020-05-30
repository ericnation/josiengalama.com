<?php

/**
 * @author: VLThemes
 * @version: 1.0
 */

?>

<form id="searchform" class="vlt-search-form" method="get" action="<?php echo esc_url( home_url( '/' )) ; ?>">
	<div class="vlt-form-group">
		<input type="text" id="s" name="s" class="vlt-form-control" placeholder="<?php esc_attr_e( 'Search...', 'vinero' ); ?>">
		<button><?php esc_html_e( 'Go', 'vinero' ); ?></button>
	</div>
</form>
<!-- /.vlt-search-form -->