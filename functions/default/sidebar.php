<?php
function wpb_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Sidebar', 'wpb' ),
    'id' => 'sidebar',
    'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'ph-job-list' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  /** Add another one */
}
  
add_action( 'widgets_init', 'wpb_widgets_init' );

/** Add pos type in query */
function include_query_post_type() {
  if( is_archive() && !is_admin() ) {
      set_query_var( 'post_type', array( 'post', 'portfolios', 'blogs', 'coding' ) );
  }
  return;
}
add_action( 'parse_query', 'include_query_post_type' );
