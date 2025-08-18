
<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header( 'shop' );

echo '<main id="primary" class="site-main shop-main">';
	if ( woocommerce_product_loop() ) {
		woocommerce_output_loop();
	} else {
		wc_get_template( 'loop/no-products-found.php' );
	}
echo '</main>';

get_footer( 'shop' );

