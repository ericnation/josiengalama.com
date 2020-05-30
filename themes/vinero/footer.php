<?php

	do_action( 'vinero/site_backtotop' );
	do_action( 'vinero/after_main_content' );
	get_template_part( 'template-parts/footer/footer' );
	do_action( 'vinero/after_site' );

?>

<?php wp_footer(); ?>

</body>
</html>