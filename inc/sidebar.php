<!-- ADS 2ds -->
<div style="margin-top:10px">
<?php do_action('CB_HOM_2') ?>
</div>




<div class="col s12 white">

<ul class="collection no-border ">
    <li class="collection-header black-text white">
    <h4 class="flow-text">Te puede interesar</h4>

    </li>

    <?php $args = array(
  'numberposts' => '7',
  'post_status' => 'publish',
  'meta_key'		=> 'featured_sidebar',
	 'meta_value'	=> '1'
);
      $recent_posts = wp_get_recent_posts($args);
      foreach ($recent_posts as $recent) {
        echo '
        <li class="collection-item avatar">
                <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'comm-grid')) . '" class="circle square">
                <span class="title">' . get_the_title() .'</span><br>';
        echo '<small class="grey-text">';
        echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . '&nbsp;';
        echo '</small>';
        echo ' <a class="view-more" href="' . get_permalink($recent["ID"]) . '"></a>';
        echo '</li>';

      }
      wp_reset_query();
      ?>          
  </ul>     
                </div>

<!-- ADS 3er -->
                <?php do_action('CB_HOM_3') ?>
