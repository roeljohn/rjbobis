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
<div class="row gx-5">
<div class="col-md-8">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <div class="bg-white border-0 p-3 rounded-0 mb-2">
	        <?php the_title(); ?>
        </div>
      </a>
    <?php endwhile; ?>
    <!-- end of the loop -->
	  <?php wpbeginner_numeric_posts_nav(); ?>
    <!-- pagination here -->
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <div class="bg-white border-0 p-3 rounded-0 mb-2">
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    </div>
  <?php endif; ?>
  </div>
  <?php get_template_part( 'section/part', 'sidebar' ); ?>
</div>
<?php get_footer(); ?>

