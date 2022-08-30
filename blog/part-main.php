<?php 
// the query
$args = array(
  'post_type' => array( 'blogs' )
);
$the_query = new WP_Query( $args ); ?>
<div class="tab-pane fade" id="pills-blog" role="tabpanel" aria-labelledby="pills-blog-tab" tabindex="0">
          <div class="list-group w-auto">
  <?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php get_template_part( 'blog/part', 'list' ); ?>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  </div>
</div>