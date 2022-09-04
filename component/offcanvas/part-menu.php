<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Navigate to pages using this menu links.</p>
    <ul class="list-group list-group-flush">
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

          $menu_items = wp_get_nav_menu_items('main', $args);
          foreach ($menu_items as $menu_item) { ?>
            <li class='list-group-item'>
              <a href="<?php echo $menu_item->url; ?>">
                <?php echo $menu_item->title; ?>
              </a>
            </li>
        <?php }
      ?>
    </ul>
  </div>
</div>