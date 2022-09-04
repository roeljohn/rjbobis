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
<hr class="col-md-12 my-5"/>
<div class="col-md-8">
  <?php if ( have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="bg-white border p-3 rounded-3">
	<h5><?php the_title(); ?></h5>
  </div>
  <div class="bg-white border p-3 rounded-3 my-2 ">
	<h6 class="mb-0"><?php echo get_the_date() ?></h6>
  </div>
  <div class="bg-white border p-3 rounded-3 my-2 ">
      <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  </div>
  <?php get_template_part( 'section/part', 'sidebar' ); ?>
  </div>
<?php get_footer(); ?>

