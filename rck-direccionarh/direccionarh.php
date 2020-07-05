<?php
	/*
		Plugin Name: Rackmed Snippets
		Plugin URI: https://rackmed.com
		description: Conjunto de hacks para DireccionaRH
		Version: 0.1
		Author: linkmoises
		Author URI: https://rackmed.com
		License: GPL2
	*/

/**
 * Adjust the quantity input values
 */
add_filter( 'woocommerce_quantity_input_args', 'rck_woocommerce_quantity_input_args', 10, 2 ); // Simple products

function rck_woocommerce_quantity_input_args( $args, $product ) {
	if ( is_singular( 'product' ) ) {
		$args['input_value'] 	= 3;	// Starting value (we only want to affect product pages, not cart)
	}
	//$args['max_value'] 	= 80; 	// Maximum value
	$args['min_value'] 	= 3;   	// Minimum value
	$args['step'] 		= 1;    // Quantity steps
	return $args;
}

// add_filter( 'woocommerce_available_variation', 'rck_woocommerce_available_variation' ); // Variations

// function rck_woocommerce_available_variation( $args ) {
// 	$args['max_qty'] = 80; 		// Maximum value (variations)
// 	$args['min_qty'] = 2;   	// Minimum value (variations)
// 	return $args;
// }

?>
