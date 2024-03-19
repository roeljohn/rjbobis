<?php
// Function to fetch data from the WordPress API
function fetch_data_from_github_api( ) {
    $url = 'https://api.github.com/repos/roeljohn/rjbobis/pulls?state=all';
    $args = array(
        'headers'     => array(
            'Authorization' => WP_API_BEARER
        ),
    ); 
    $response = wp_remote_get(
        $url,
        $args
    );
    if ( is_wp_error( $response ) ) {
        return false;
    }
    
    // Get the response body and decode it as JSON
    $data = wp_remote_retrieve_body( $response );
    
    $data = json_decode( $data, true );

    return $data;
}