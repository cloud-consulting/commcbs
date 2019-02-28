<div class="col s12 l8">
<?php $args = array(
  'numberposts' => '1',
  'offset' => '1',
  'post_status' => 'publish',


);

$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
  echo '

  <div class="card">
      <div class="card-image">
      <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'comm-defaul')) . '">
      </div>
      <div class="card-content grey-text text-darken-4">
        <p>' . $recent["post_title"] . '</p>
      </div>
      <a class="view-more" href="' . get_permalink($recent["ID"]) . '"></a>
      </div>
    ';
}
wp_reset_query();
?>
</div>

<div class="col s12 l4">
<?php $args = array(
  'numberposts' => '2',
  'offset' => '2',

);

$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
  echo '

  <div class="card">
      <div class="card-image">
      <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'comm-defaul')) . '">
      </div>
      <div class="card-content grey-text text-darken-4" style="padding:8px">
        <small>' . $recent["post_title"] . '</small>
      </div>
      <a class="view-more" href="' . get_permalink($recent["ID"]) . '"></a>
      </div>
      
    ';
}
wp_reset_query();
?>
</div>
