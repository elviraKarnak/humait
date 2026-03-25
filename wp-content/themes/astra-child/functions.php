<?php 

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


// style sheet & scripts

function humait_enqueue(){

	$uri = get_stylesheet_directory_uri();
    $ver = 1.0;
    $vert = time();

      wp_register_style( 'bootstrap',   $uri. '/assets/css/bootstrap.min.css', [], $ver);
	  wp_register_style( 'font-awesome', $uri.'/assets/css/fontawesome/all.min.css', [], $ver);
	  wp_register_style( 'owl', $uri. '/assets/css/owl.carousel.min.css', [], $ver);
	  wp_register_style( 'theme-css',  $uri. '/assets/css/main-style.css', [], $vert);
	  wp_register_style( 'theme_stylesheet', $uri. '/style.css', [], $vert);


	  wp_enqueue_style( 'bootstrap');
	  wp_enqueue_style( 'font-awesome');
	  wp_enqueue_style( 'owl');
	  wp_enqueue_style( 'theme-css');
	  wp_enqueue_style( 'theme_stylesheet');

	 
	  wp_register_script( 'bootstrap', $uri . '/assets/js/bootstrap/bootstrap.bundle.min.js', [], $ver, true );
	  wp_register_script( 'owl',     $uri . '/assets/js/owl/owl.carousel.min.js',  [], $ver, true );
	  wp_register_script( 'custom-js', $uri . '/assets/js/custom.js', [], $vert, true );


	  wp_enqueue_script('jquery');
	  wp_enqueue_script('bootstrap');
	  wp_enqueue_script('owl');
	  wp_enqueue_script('custom-js');


	  wp_localize_script(
        'custom-js',
        'viabostad_functions', // JS object name
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('viabostad_nonce'),
			'is_user_logged_in' => is_user_logged_in(),
        )
    );

  }

  add_action( 'wp_enqueue_scripts', 'humait_enqueue' );



// register navs
register_nav_menus(
	array(
		'menu-1' => __('Primary', 'astra-child'),
		'menu-2' => __('Footer Menu', 'astra-child'),
		'menu-3' => __('Language', 'astra-child'),
    )
);

	// theme support
if ( ! function_exists( 'humait_setup_theme' ) ) {

	function humait_setup_theme() {

		// Basic supports
		add_theme_support( 'custom-logo' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );

		// WooCommerce support
		add_theme_support( 'woocommerce' );

		// Optional (recommended)
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}

}
add_action( 'after_setup_theme', 'humait_setup_theme', 20 );


require get_template_directory() . '/inc/custom_functions.php';