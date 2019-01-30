<!-- ADS 2ds -->

<?php 
            if ( is_front_page() && is_home() )  {
              // Default HOM
              do_action('CB_1er_HOM');
            } elseif ( in_category( '' )) {
              // DPT
              do_action('');
            } elseif ( in_category( '' )) {
              // INT
              do_action('');
            } elseif ( in_category( '' )) {
              // NOT
              do_action('');
            } elseif ( in_category( '' )) {
              // NUE
              do_action('');
            } elseif ( in_category( '' )) {
              // PER
              do_action('');
            } elseif ( in_category( '' )) {
              // RES
              do_action('');
            } elseif ( in_category( '' )) {
              // SEL
              do_action('');
            } else {
              //everything else
              do_action('CB_1er_HOM');
            }
?>

<!-- ADS 3er -->

<?php 
            if ( is_front_page() && is_home() )  {
              // Default HOM
              do_action('');
            } elseif ( in_category( '' )) {
              // DPT
              do_action('');
            } elseif ( in_category( '' )) {
              // INT
              do_action('');
            } elseif ( in_category( '' )) {
              // NOT
              do_action('');
            } elseif ( in_category( '' )) {
              // NUE
              do_action('');
            } elseif ( in_category( '' )) {
              // PER
              do_action('');
            } elseif ( in_category( '' )) {
              // RES
              do_action('');
            } elseif ( in_category( '' )) {
              // SEL
              do_action('');
            } else {
              //everything else
              do_action('CB_1er_HOM');
            }
?>

<div class="col s12 white">

<ul class="collection no-border ">
    <li class="collection-header black-text white">
    <h4 class="flow-text">Te puede interesar</h4>
    </li>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => '8',
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


  <!-- ADS 4er -->

                <?php 
            if ( is_front_page() && is_home() )  {
              // Default HOM
              do_action('CB_1er_HOM');
            } elseif ( in_category( '' )) {
              // DPT
              do_action('');
            } elseif ( in_category( '' )) {
              // INT
              do_action('');
            } elseif ( in_category( '' )) {
              // NOT
              do_action('');
            } elseif ( in_category( '' )) {
              // NUE
              do_action('');
            } elseif ( in_category( '' )) {
              // PER
              do_action('');
            } elseif ( in_category( '' )) {
              // RES
              do_action('');
            } elseif ( in_category( '' )) {
              // SEL
              do_action('');
            } else {
              //everything else
              do_action('CB_1er_HOM');
            }
?>