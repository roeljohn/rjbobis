<a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <span data-bs-toggle="tooltip" data-bs-title="The last tip!">
                <?php 
                  if ($args){
                    get_template_part( 'component/icons/part', ''. $args[0]->category_nicename .''); 
                  } else {
                    get_template_part( 'component/icons/part', 'uncategorized'); 
                  }
                  
                ?>
              </span>
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0"><?php the_title(); ?></h6>
                </div>
                <small class="opacity-50 text-nowrap"><?php echo get_the_date(); ?></small>
              </div>
            </a>