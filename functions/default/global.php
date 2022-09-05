<?php
add_filter('show_admin_bar', '__return_false');

function delete_post_type(){
  unregister_post_type( 'post' );
}

add_action('init','delete_post_type');
	
add_theme_support( 'post-thumbnails' );

