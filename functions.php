<?php
/**
 * The functions.php file behaves like a WordPress plugin, adding features and functionality to a 
 * WordPress site. You can use it to call WordPress functions and to define your own functions.
 */
/** Default */
require_once( __DIR__ . '/functions/default/sidebar.php');
require_once( __DIR__ . '/functions/default/pagination.php');
require_once( __DIR__ . '/functions/default/global.php');
require_once( __DIR__ . '/functions/default/settings.php');
require_once( __DIR__ . '/functions/default/breadcrumbs.php');

/** Post type */
require_once( __DIR__ . '/functions/post-type/portfolio.php');
require_once( __DIR__ . '/functions/post-type/blog.php');
require_once( __DIR__ . '/functions/post-type/coding.php');
/**
 * Enqueue scripts and styles
 */
require_once( __DIR__ . '/functions/enqueue/theme_css_js.php');

