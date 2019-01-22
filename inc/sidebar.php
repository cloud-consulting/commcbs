<!-- ADS 2ds -->

<?php do_action('CB_2ds_SEL') ?>
<?php do_action('CB_2ds_NUE') ?>
<?php do_action('CB_2ds_INT') ?>
<?php do_action('CB_2ds_RES') ?>
<?php do_action('CB_2ds_NOT') ?>
<?php do_action('CB_2ds_PER') ?>
<?php do_action('CB_2ds_DPT') ?>
<?php do_action('CB_2ds_OCL') ?>
<?php do_action('CB_2ds_NAL') ?>
<?php do_action('CB_2ds_MIL') ?>
<?php do_action('CB_2ds_MED') ?>

<!-- ADS 3er -->
<?php do_action('CB_3er_MED') ?>
<?php do_action('CB_3er_MIL') ?>
<?php do_action('CB_3er_OCL') ?>


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


<?php do_action('CB_4to_HOM') ?>
<?php do_action('CB_4to_NOT') ?>
<?php do_action('CB_4to_ESP') ?>
<?php do_action('CB_4to_SHP') ?>