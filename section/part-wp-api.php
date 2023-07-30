<p> List the 5 post type coding using wp-api </p>
<?php
    // Usage example: Fetch posts from the API
    $posts = fetch_data_from_api( 'wp/v2/coding' );
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
?>
<hr/>
<p> Fetch specific data of post type using ID </p>
<?php

$postContent = fetch_data_from_api( 'wp/v2/posts/197' );
// Do something with the post data
if ( ! empty( $postContent ) ) {
    echo '<h2>' . $postContent['title']['rendered'] . '</h2>';
    echo '<div>' . $postContent['content']['rendered'] . '</div>';
    // ... and so on
} else {
    echo 'Post not found.';
}
?>