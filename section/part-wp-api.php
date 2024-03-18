
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