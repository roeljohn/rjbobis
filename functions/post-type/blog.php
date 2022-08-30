<?php

/*
* Creating a function to create our CPT
*/
  
function custom_post_type_blog() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Blog', 'Portfolio General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'Blog', 'Portfolio Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'Blogs', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent Blog', 'twentytwentyone' ),
            'all_items'           => __( 'All Blog', 'twentytwentyone' ),
            'view_item'           => __( 'View Blog', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New Blog', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit Blog', 'twentytwentyone' ),
            'update_item'         => __( 'Update Blog', 'twentytwentyone' ),
            'search_items'        => __( 'Search Blog', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'blogs', 'twentytwentyone' ),
            'description'         => __( 'Blog news and reviews', 'twentytwentyone' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'blogs', $args );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type_blog', 0 );