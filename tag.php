<?php
/**
 * This file is for
 * tag.php
 * Rules
 * If tag.php does not exist, WordPress will look for a generic archive template, archive.php.
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

