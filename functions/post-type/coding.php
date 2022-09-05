<?php

/*
* Creating a function to create our CPT
*/
  
function custom_post_type_coding() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Coding', 'Coding General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'Coding', 'Coding Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'Coding', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent Coding', 'twentytwentyone' ),
            'all_items'           => __( 'All Coding', 'twentytwentyone' ),
            'view_item'           => __( 'View Coding', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New Coding', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit Coding', 'twentytwentyone' ),
            'update_item'         => __( 'Update Coding', 'twentytwentyone' ),
            'search_items'        => __( 'Search Coding', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'coding', 'twentytwentyone' ),
            'description'         => __( 'Coding news and reviews', 'twentytwentyone' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'category', 'post_tag' ),
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
        register_post_type( 'coding', $args );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type_coding', 0 );