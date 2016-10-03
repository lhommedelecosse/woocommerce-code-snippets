<?php  // <~ do not copy the opening php tag

/**
 * Add logo without Jetpack
 */

add_action( 'init', 'storefront_custom_logo' );

function storefront_custom_logo() {
    remove_action( 'storefront_header', 'storefront_site_branding', 20 );
    add_action( 'storefront_header', 'storefront_display_custom_logo', 20 );
}

function storefront_display_custom_logo() {

	if(pll_current_language() == 'en') {
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-link" rel="home">
        <img src="/wp-content/uploads/2016/07/cropped-Savon-Colette-New-Logo-EN.png" alt="<?php echo get_bloginfo( 'name' ); ?>" />
        </a>
        <?php
    } else {
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-link" rel="home">
        <img src="/wp-content/uploads/2016/07/cropped-Savon-Colette-New-Logo-FR.png" alt="<?php echo get_bloginfo( 'name' ); ?>" />
        </a>
        <?php
    }
}
