<?php

//include wp-bootstrap-navwalker
require_once('wp-bootstrap-navwalker.php');

// Adding css Styles
function add_css_styles(){

    wp_enqueue_style('bootstrap-style', get_template_directory_uri(  ) . '/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri(  ) . '/css/main.css');

}

// Adding javascript
function add_js_scripts(){

    wp_enqueue_script('bootstrap-js', get_template_directory_uri(  ) . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri(  ) . '/js/main.js', array(), false, true );

}

// Register custom menu
function register_menu(){
    
    register_nav_menus( array(
        'header_menu' => 'Header_Menu',
        'footer_menu' => 'Footer_Menu'
    ) );

}

// Add Menu
function theme_header_menu(){

    wp_nav_menu(array(

        'theme_location' => 'header_menu',
        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0 mx-auto',
        'container' => false,
        'walker' => new wp_bootstrap_navwalker()


    ));

}

//Add theme support
// add_theme_support( 'post-thumbnails' );

// Adding actions to import styles & scripts
add_action( 'wp_enqueue_scripts', 'add_css_styles' );
add_action( 'wp_enqueue_scripts', 'add_js_scripts' );

// Adding menu
add_action('init', 'register_menu');

?>