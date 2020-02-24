<?php
function my_functions() {
    // all styles
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), 20141119 );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/style.css', array(), 20141119 );
    // all scripts
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20120206', true );
}
add_action( 'wp_enqueue_scripts', 'my_functions' );

add_action('after_setup_theme', 'testmonials');
