<?php 
// the query
$args = array(
  'post_type' => array( 'page' ),
  'page_id' => 11
);
$the_query = new WP_Query( $args ); ?>
<div class="tab-pane fade" id="pills-work-experience" role="tabpanel" aria-labelledby="pills-work-experience-tab" tabindex="0">
  <div class="card">
    <article class="card-body blog-post">
      <?php if ( $the_query->have_posts() ) : ?>
        <!-- pagination here -->
        <!-- the loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <!-- end of the loop -->
        <!-- pagination here -->
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </article>
  </div>
</div>