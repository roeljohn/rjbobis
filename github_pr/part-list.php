<a href="<?php echo $args['head']['user']['html_url']; ?>/rjbobis/pulls?q=is%3Apr+author%3A%40me+is%3Aclosed" target="_blank" class="list-group-item list-group-item-action d-flex gap-3 py-3 border-0" aria-current="true">
  <span data-bs-toggle="tooltip" data-bs-title="The last tip!">
    <?php 
      get_template_part( 'component/icons/part', 'api');          
    ?>
  </span>
  <div class="d-flex gap-2 w-100 justify-content-between align-items-center">
    <div>
      <h6 class="mb-0"><?php echo $args['title']; ?></h6>
    </div>
    <small class="opacity-50 text-nowrap"><?php echo date("d-M-Y", strtotime($args['created_at'])); ?></small>
  </div>
</a>

