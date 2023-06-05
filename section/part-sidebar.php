<div class="col-md-4">
  <div class="position-sticky bg-white p-3 rounded-0" style="top: 2rem;">
    <?php
      /**
        * Purpose
        * Get single meta information
      */
      if ( is_active_sidebar( 'sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar' ); ?>
    <?php endif; ?>
  </div>
</div>