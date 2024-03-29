<?php
// Function to fetch data from the WordPress API
function fetch_data_from_api( $endpoint ) {
    $url = 'https://roeljohnbobis.com/wp-json/' . $endpoint;
    
    $response = wp_remote_get( $url, ['timeout' => 20] );
    
    if ( is_wp_error( $response ) ) {
        return false;
    }

    // Get the response body and decode it as JSON
    $data = wp_remote_retrieve_body( $response );
    
    $data = json_decode( $data, true );

    return $data;
}


