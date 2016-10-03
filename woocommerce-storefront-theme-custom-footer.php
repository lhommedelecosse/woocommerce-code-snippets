<?php  // <~ do not copy the opening php tag

add_action( 'init', 'custom_remove_footer_credit', 10 );

function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
} 

function custom_storefront_credit() {
	?>
	<div class="site-info">
		&copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' ); ?> &nbsp; 
		  <a href="http://www.lhommedelecosse.com" target="_blank">Website by L'homme de l'ecosse</a>
	</div><!-- .site-info -->
	<?php
}
