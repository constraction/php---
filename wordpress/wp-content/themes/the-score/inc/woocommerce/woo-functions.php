<?php // Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * WooCommerce Functions
 */

 
/* View Product Button */
add_action('woocommerce_after_shop_loop_item','seos_football_premium_replace_add_to_cart');

function seos_football_premium_replace_add_to_cart() {
	
		global $product;
		$link = $product->get_permalink();
		echo do_shortcode('<a href="'.$link.'" class="button viewbutton">'. __( "View Product", 'the-score' ) .'</a>');
	
}
