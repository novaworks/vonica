<?php

// @version 3.6.0

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
if(wc_get_loop_prop('grid_style',1) == 4) {
	wc_get_template( 'content-product-style_04.php' );
}else {
	wc_get_template( 'content-product-default.php' );
}
