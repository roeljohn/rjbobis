<?php
/** 
 * The single post template file is used to render a single post. WordPress uses the following path:

 * single-{post-type}-{slug}.php – (Since 4.4) First, WordPress looks for a template for the specific post. For example, if post type is product and the post slug is dmc-12, WordPress would look for single-product-dmc-12.php.
 * single-{post-type}.php – If the post type is product, WordPress would look for single-product.php.
 * single.php – WordPress then falls back to single.php.
 * singular.php – Then it falls back to singular.php.
 * index.php – Finally, as mentioned above, WordPress ultimately falls back to index.php.
*/
get_header(); ?>
<div class="row gx-5">
  <hr class="col-md-12 my-5"/>
  <div class="col-md-8">
    <?php if ( have_posts() ) : ?>
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

