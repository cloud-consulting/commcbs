<div class="card">
            <div class="card-image">
              <img src="<?php the_post_thumbnail_url(); ?>">
            </div>

            <div class="card-content grey-text text-darken-4" style="padding:8px;">
            <small><?php the_title(); ?></small>
            </div>

            <a href="<?php the_permalink();?>" class="view-more"></a>
          </div>