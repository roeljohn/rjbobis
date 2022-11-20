<?php
/**
 * Likewise, 404 template files are called in this order:
 * Test
 * 404.php
 * index.php
 */

get_header(); ?>
<div class="card mb-2">
  <article class="card-body blog-post">
    <?php get_search_form(); ?>
  </article>
</div>
<div class="card p-5">
  <article class="card-body blog-post">
    <h1 class="display-1 text-center">404</h1>
    <h1 class="display-1 text-center">Page Not Found</h1>
  </article>
</div>
<?php get_footer(); ?>
