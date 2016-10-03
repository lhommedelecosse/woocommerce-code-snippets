<?php  // <~ do not copy the opening php tag

add_action( 'woocommerce_before_checkout_process', 'wc_minimum_order_amount' );
add_action( 'woocommerce_before_cart' , 'wc_minimum_order_amount' );
 
function wc_minimum_order_amount() {
    // Set this variable to specify a minimum order value
    $minimum = 20;

    if(pll_current_language() == 'en') {
	  	$notice = 'You must have an order with a minimum of %s to place your order, your current order total is %s.';
	} else {
	  	$notice = 'Vous devez disposer d\'une commande avec un minimum de %s pour passer votre commande, votre total de commandes actuel est %s.';
	}	  
		
    if ( WC()->cart->total < $minimum ) {

        if( is_cart() ) {

            wc_print_notice( 
                sprintf( $notice , 
                    wc_price( $minimum ), 
                    wc_price( WC()->cart->total )
                ), 'error' 
            );

        } else {

            wc_add_notice( 
                sprintf( $notice , 
                    wc_price( $minimum ), 
                    wc_price( WC()->cart->total )
                ), 'error' 
            );

        }
    }
}
