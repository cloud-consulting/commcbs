<div class="ad col s12" style="height:200px">
</div>

<div class="col s12 white">

<ul class="collection no-border ">
    <li class="collection-header black-text white">
    <h4 class="flow-text">Te puede interesar</h4>
    </li>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 8,
                        'post_status' => 'publish',
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                           while ( $the_query->have_posts() ) {
                            $the_query->the_post(); ?>

             <li class="collection-item avatar">
  <img src="<?php echo get_the_post_thumbnail_url() ?>" class="circle square">

  <span class="title"><?php the_title();?></span><br>
  <small class="grey-text"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . '&nbsp;'; ?>  </small>
  <a href="<?php the_permalink();?>" class="view-more"></a>
</li>                      

                    <?php }
                    } 
                    wp_reset_postdata();
                ?>
  </ul>     
                </div>

                <div class="ad col s12" style="height:200px">
</div>