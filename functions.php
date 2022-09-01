<?php
/**
 * The functions.php file behaves like a WordPress plugin, adding features and functionality to a 
 * WordPress site. You can use it to call WordPress functions and to define your own functions.
 */
/** Default */
require_once( __DIR__ . '/functions/default/sidebar.php');
require_once( __DIR__ . '/functions/default/pagination.php');
require_once( __DIR__ . '/functions/default/global.php');

/** Post type */
require_once( __DIR__ . '/functions/post-type/portfolio.php');
require_once( __DIR__ . '/functions/post-type/blog.php');
require_once( __DIR__ . '/functions/post-type/coding.php');
/**
 * Enqueue scripts and styles
 */
function ph_job_list_enqueue_scripts() {
    // all styles
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/dist/css/bootstrap.css', array(), '5.2.0' );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0' );
    // all scripts
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array('jquery'), '20120206', true );
  }
  add_action( 'wp_enqueue_scripts', 'ph_job_list_enqueue_scripts' );

function delete_post_type(){
    unregister_post_type( 'post' );
}
add_action('init','delete_post_type');