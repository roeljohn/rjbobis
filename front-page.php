<?php
/**
 * A front-page is a static homepage
 * Wordpress call this first instead of index.php or home.php
 * 
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
<div class="row">
  <?php get_template_part( 'section/part', 'header' ); ?>
  <div class="tab-content" id="pills-tabContent">
    <!--?php get_template_part( 'portfolio/part', 'main' ); ?-->
    <?php get_template_part( 'experience/part', 'main' ); ?>
    <?php get_template_part( 'coding/part', 'main' ); ?>
    <?php get_template_part( 'blog/part', 'main' ); ?>
    <?php get_template_part( 'github_pr/part', 'main' ); ?>
  </div>
</div>
</main>
<?php get_footer(); ?>