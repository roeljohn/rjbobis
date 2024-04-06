<?php
/**
 * The template for displaying single books.
 *
 * @package YourThemeName
 */
get_template_part( 'section/part', 'temp-header' );

while (have_posts()) : the_post();
    // Content specific to single beaver post type
    the_content();
endwhile;

get_template_part( 'section/part', 'temp-footer' );