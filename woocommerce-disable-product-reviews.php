<?php  // <~ do not copy the opening php tag

function sb_woo_remove_reviews_tab($tabs) {
	unset($tabs['reviews']);
	return $tabs;
}

add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);
