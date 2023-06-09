<?php

function mytheme_localisation(){

    function mytheme_localised( $locale ) {
        if ( isset( $_GET['l'] ) ) {
            return sanitize_key( $_GET['l'] );
        }
        return $locale;
    }
    add_filter( 'locale', 'mytheme_localised' );

    load_theme_textdomain( 'mytheme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'mytheme_localisation' );
require(__DIR__."/version-code.php");

if ( ! defined( 'AWT_DIR_PATH' ) ) {
	define( 'AWT_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'AWT_DIR_URI' ) ) {
	define( 'AWT_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'AWT_BUILD_CSS_URI' ) ) {
	define( 'AWT_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/custom/css' );
}

add_action( 'wp_enqueue_scripts', 'awt_register_styles' );
function awt_register_styles() {
    wp_enqueue_style( 'core-css', AWT_BUILD_CSS_URI . '/core.css',[],VERSION_CODE,'all');
    wp_enqueue_style( 'extend-css', AWT_BUILD_CSS_URI . '/extend.css',[],VERSION_CODE,'all');
    wp_enqueue_style( 'slick-theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',[],VERSION_CODE,'all');
    wp_enqueue_style( 'slick-theme-2', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css',[],VERSION_CODE,'all');
    wp_enqueue_script( 'jquery-base64', AWT_DIR_URI . '/includes/public/js/jquery.base64.min.js', ['jquery'],VERSION_CODE, false  );
}

add_action('wp_footer', function(){
    wp_enqueue_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', ['jquery'],VERSION_CODE, false  );
    wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'],VERSION_CODE, false  );
});

register_nav_menus( array(
	'header-menu'    => __( 'Header'),
	'my-account-menu'    => __( 'My Account'),
	'footer-menu' => __( 'Footer'),
	'absolute-footer-menu' => __( 'Absolute Footer'),
) );
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    
}

