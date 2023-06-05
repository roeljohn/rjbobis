<?php
/**
 * Rendering category archive index pages uses the following path in WordPress:

 * category-{slug}.php – If the category’s slug is news, WordPress will look for category-news.php.
 * category-{id}.php – If the category’s ID is 6, WordPress will look for category-6.php.
 * category.php
 * archive.php
 * index.php
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
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
  </div>
  <?php get_template_part( 'section/part', 'sidebar' ); ?>
</div>
<?php get_footer(); ?>

