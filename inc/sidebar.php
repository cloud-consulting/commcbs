<!-- ADS 2ds -->



<!-- ADS 3er -->



<div class="col s12 white">

<ul class="collection no-border ">
    <li class="collection-header black-text white">
    <h4 class="flow-text">Te puede interesar</h4>

    </li>

    <?php $args = array(
  'numberposts' => '7',
  'post_status' => 'publish',
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
        echo '</li>';

      }
      wp_reset_query();
      ?>          
  </ul>     
                </div>

