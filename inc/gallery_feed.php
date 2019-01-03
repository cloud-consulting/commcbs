<div class="carousel" style="padding-bottom: 250px!important;">

<?php

$args = array(
  'numberposts' => '10',
  'category' => '4',
  'post_status' => 'publish',



);

$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
  echo '

  <a class="carousel-item" href="' . get_permalink($recent["ID"]) . '">

  <div class="card">
      <div class="card-image">
      <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'comm-grid')) . '">
      <span class="card-title center-icon valign-wrapper"><i style="" class="material-icons fluid center">play_circle_filled</i></span>

      </div>
      <div class="card-content grey-text text-darken-4">
        <small>' . $recent["post_title"] . '</small>
      </div>
      </div>

  

  </a>';
}
wp_reset_query();
?>
</div>