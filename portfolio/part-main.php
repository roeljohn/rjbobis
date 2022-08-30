<?php 
// the query
$args = array(
  'post_type' => array( 'portfolios' )
);
$the_query = new WP_Query( $args ); ?>
 <div class="tab-pane fade show active" id="pills-portfolio" role="tabpanel" aria-labelledby="pills-portfolio-tab" tabindex="0">
          <div class="row row-cols-1 row-cols-md-3 g-4">
  <?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php get_template_part( 'portfolio/part', 'list' ); ?>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  </div>
</div>


            
