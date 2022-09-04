<div class="col">
  <div class="card">
    <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
      <?php endif; ?>
      <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated <?php echo get_the_modified_time('F jS, Y'); ?></small>
      </div>
    </a>
  </div>
</div>