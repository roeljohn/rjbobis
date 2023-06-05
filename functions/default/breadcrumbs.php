<?php

function wp_custom_breadcrumbs() {
    // Define separator and breadcrumbs container
    $separator = '<span class="separator"> / </span>';
    $container = '<div class="breadcrumbs">%s</div>';

    // Get the queried object
    $queried_object = get_queried_object();

    // Start the breadcrumbs output
    $breadcrumbs = '';

    // Add the home link
    $breadcrumbs .= '<a href="' . get_home_url() . '">' . __('Home', 'text-domain') . '</a>';

    // Check if it's a singular post type
    if (is_singular()) {
        // Get the post type
        $post_type = get_post_type();

        // Get the post type labels
        $post_type_labels = get_post_type_labels(get_post_type_object($post_type));

        // Add the post type archive link
        $breadcrumbs .= $separator . '<a href="' . get_post_type_archive_link($post_type) . '">' . $post_type_labels->name . '</a>';

        // Check if it's a single post
        if (is_single()) {
            // Get the post categories
            $categories = get_the_category($queried_object->ID);

            if ($categories) {
                // Get the last category
                $last_category = end($categories);

                // Add the category link
                $breadcrumbs .= $separator . '<a href="' . get_category_link($last_category->term_id) . '">' . $last_category->name . '</a>';
            }

            // Add the post title
            $breadcrumbs .= $separator . '<span class="current">' . get_the_title() . '</span>';
        }
    }

    // Display the breadcrumbs
    printf($container, $breadcrumbs);
}