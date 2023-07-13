<?php

/*
* Creating a function to create our CPT
*/
  
function custom_post_type_beaver() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Beaver Builder', 'Portfolio General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'Beaver Builder', 'Portfolio Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'Beaver Builders', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent Beaver Builder', 'twentytwentyone' ),
            'all_items'           => __( 'All Beaver Builder', 'twentytwentyone' ),
            'view_item'           => __( 'View Beaver Builder', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New Beaver Builder', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit Beaver Builder', 'twentytwentyone' ),
            'update_item'         => __( 'Update Beaver Builder', 'twentytwentyone' ),
            'search_items'        => __( 'Search Beaver Builder', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'beaver', 'twentytwentyone' ),
            'description'         => __( 'Beaver Builder news and reviews', 'twentytwentyone' ),
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
        register_post_type( 'beaver', $args );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type_beaver', 0 );