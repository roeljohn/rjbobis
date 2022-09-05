<?php
/**
 * By default, WordPress sets your site’s home page to display your latest blog posts. This page
 * is called the blog posts index. You can also set your blog posts to display on a separate static
 * page. The template file home.php is used to render the blog posts index, whether it is being
 * used as the front page or on separate static page. If home.php does not exist, WordPress will
 * use index.php.
 * 
 * If front-page.php exists, it will override the home.php template
 * 
 * index.php last one to be called if home.php and front-page.php can find in wp
 */
get_header(); ?>
<div class="row gx-5">
<div class="col-md-8">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <div class="bg-white border p-3 rounded-3 mb-2">
	        <?php the_title(); ?>
        </div>
      </a>
    <?php endwhile; ?>
    <!-- end of the loop -->
	  <?php wpbeginner_numeric_posts_nav(); ?>
    <!-- pagination here -->
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  </div>
  <?php get_template_part( 'section/part', 'sidebar' ); ?>
</div>
<?php get_footer(); ?>