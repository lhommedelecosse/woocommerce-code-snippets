<?php  // <~ do not copy the opening php tag

/**
 * Adds product Weights above the "Add to Cart" buttons
 * Tutorial: http://www.skyverge.com/blog/add-information-to-woocommerce-shop-page/
**/
function skyverge_shop_display_weight() {
	global $product;
		if ( $product->has_weight() ) {
    		echo '<div class="product-meta"><span class="product-meta-label">Weight:</span> ' . $product->get_weight() . ' ' . esc_attr( get_option( 'woocommerce_weight_unit' ) ) . '</div>';
	} 
}
add_action( 'woocommerce_after_shop_loop_item', 'skyverge_shop_display_weight', 9 );

function cj_show_dimensions() {
	global $product;
	$dimensions = $product->get_dimensions();
        if ( ! empty( $dimensions ) ) {
                echo '<div class="product-meta"><span class="product-meta-label">Size:</span> ' . esc_attr( $dimensions ) . '</div>';
        }
}
add_action( 'woocommerce_after_shop_loop_item', 'cj_show_dimensions', 9 );
