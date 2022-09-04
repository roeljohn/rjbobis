<?php
/**
 * Similarly, footer.php in a file in the WordPress page hierarchy is used to build 
 * the footer section of a WordPress theme and called in the footer section of all the template files. 
 * The footer.php generally contains the copyright information, calls to JS files, widget areas that 
 * commonly have site navigation.
 */

?>
  <footer class="my-5 pt-5 text-muted text-center text-small">
  <?php echo get_option( 'rj_copyright' ); ?>
    <ul class="list-inline">
    <?php 
      $args = array(
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'post_type'              => 'nav_menu_item',
        'post_status'            => 'publish',
        'output'                 => ARRAY_A,
        'output_key'             => 'menu_order',
        'nopaging'               => true,
        'update_post_term_cache' => false );

        $menu_items = wp_get_nav_menu_items('footer', $args);
        foreach ($menu_items as $menu_item) { ?>
          <li class="list-inline-item">
            <a href="<?php echo $menu_item->url; ?>">
              <?php echo $menu_item->title; ?>
            </a>
          </li>
      <?php  }
      ?>
    </ul>
  </footer>
</div>

<?php get_template_part( 'component/part', 'offcanvas' ); ?>
<?php wp_footer(); ?>
</body>
</html>