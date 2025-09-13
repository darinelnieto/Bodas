<?php
function sajo_register_partial_script($file) {
    $partial = basename($file, '.php');
    $js_file = get_template_directory() . "/js/partials/{$partial}.min.js";
    $js_url  = get_template_directory_uri() . "/js/partials/{$partial}.min.js";

    if (file_exists($js_file)) {
        // Cargar siempre en el footer
        add_action('wp_footer', function() use ($partial, $js_url) {
            wp_enqueue_script("partial-{$partial}", $js_url, [], null, true);
        });
    }
}

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

/**
 * Register Theme Scripts
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
function sajo_scripts() {
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/main.bundle.css' );
  wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style('owl-carousel.css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
  wp_enqueue_style('font-awesome.css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');

  wp_enqueue_script('jquery.js', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', true);
  wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.bundle.js', array( 'jquery' ), '', true );
  wp_enqueue_script('font-awesome.js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js');
  wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script('owl-carousel.js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
}
add_action( 'wp_enqueue_scripts', 'sajo_scripts');

/**
 * Register Navigation Menus
 * https://developer.wordpress.org/reference/functions/register_nav_menus/
 */
function sajo_navigation_menus() {
  $locations = array(
    'main_menu' => __( 'Main Menu', 'text_domain' )
  );
  register_nav_menus( $locations );
}
add_action( 'init', 'sajo_navigation_menus' );

/**
 * Theme support
 * https://developer.wordpress.org/reference/functions/add_theme_support/
 */
add_theme_support( 'custom-logo' );

/**
 * Install latest jQuery version 3.5.1
 */
if (!is_admin()) {
  wp_deregister_script('jquery');
  wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), false);
  wp_enqueue_script('jquery');
}

// Options page
if (function_exists('acf_add_options_page')){
  acf_add_options_page(array(
    'page_title'    => 'Options theme',
    'menu_title'    => 'Options theme',
    'menu_slug'     => 'theme-settings',
    'capability'    => 'edit_posts',
    'redirect'      =>  true
    ));
  acf_add_options_sub_page(array(
    'page_title'     => 'Header',
    'menu_title'     => 'Header',
    'parent_slug'   => 'theme-settings',
  ));
  acf_add_options_sub_page(array(
    'page_title'     => 'Globals styles',
    'menu_title'     => 'Globals styles',
    'parent_slug'   => 'theme-settings',
  ));
  acf_add_options_sub_page(array(
    'page_title'     => 'Footer',
    'menu_title'     => 'Footer',
    'parent_slug'   => 'theme-settings',
  ));
}