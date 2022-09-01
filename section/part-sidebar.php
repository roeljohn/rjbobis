<div class="col-md-4">
      <div class="position-sticky bg-white border p-3 rounded-3" style="top: 2rem;">
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