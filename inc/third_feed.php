<div class="card">
            <div class="card-image">
              <img src="<?php the_post_thumbnail_url('trends-grid'); ?>">
              <span style="position: absolute;top: 5px;"></span>
            </div>
            <div class="card-content" style="padding:5px;">
            <span class="card-title"><small><?php the_title(); ?></small></span>
            </div>
            <a href="<?php the_permalink();?>" class="view-more"></a>
          </div>