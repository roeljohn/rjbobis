<?php
/**
 * The template file used to render a static page (page post-type). Note that unlike other post-types, 
 * page is special to WordPress and uses the following path:
 * custom template file – The page template assigned to the page. See get_page_templates().
 * page-{slug}.php – If the page slug is recent-news, WordPress will look to use page-recent-news.php.
 * page-{id}.php – If the page ID is 6, WordPress will look to use page-6.php.
 * page.php
 */

get_header(); ?>
          <div class="card">
            <article class="card-body blog-post">
  <?php if ( have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( have_posts() ) : the_post(); ?>
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
<?php get_footer(); ?>