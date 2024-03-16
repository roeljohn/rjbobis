<?php
/*
Template Name: WP-API
Template Post Type: coding
*/
get_header(); ?>
<div class="card rounded-0 bg-white border-0">
  <article class="card-body blog-post">
    <?php if ( have_posts() ) : ?>
      <!-- the loop -->
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php get_template_part( 'section/part', 'wp-api' ); ?>
      <?php endwhile; ?>
      <!-- end of the loop -->
      <!-- pagination here -->
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </article>
</div>
<?php get_footer(); ?>