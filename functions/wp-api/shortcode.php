<?php

function fetch_basic_api_shortcode(){
        // Usage example: Fetch posts from the API
    $posts = fetch_data_from_api( 'wp/v2/coding' );
    ob_start();
    if ( $posts ) {
        $limited_posts = array_slice( $posts, 0, 5 );
        echo '<ul>';
            foreach ( $limited_posts as $post ) {
                echo '<li><a href="' . $post['link'] . '">' . $post['title']['rendered'] . '</a></li>';
            }
        echo '</ul>';
    } else {
        echo 'Failed to fetch data from the API.';
    }
    return ob_get_clean();
}

add_shortcode( 'fetch_basic_api', 'fetch_basic_api_shortcode' );

function fetch_coding_post_type_id_shortcode(){
    $content = fetch_data_from_api( 'wp/v2/demo/266' );
    
    // Do something with the post data
    ob_start();
    if ( ! empty( $content ) ) {
        echo '<h2>' . $content['title']['rendered'] . '</h2>';
        echo '<div>' . $content['content']['rendered'] . '</div>';
        // ... and so on
    } else {
        echo 'Post not found.';
    }
    return ob_get_clean();
}

add_shortcode( 'fetch_coding_post_type_id', 'fetch_coding_post_type_id_shortcode' );