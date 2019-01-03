

<div class="col s12 cards-container">
<?php $args = array(
  'numberposts' => '6',
  'offset' => '4',
  'post_status' => 'publish',

);

$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
  echo '
<div class="">
  <div class="card">
      <div class="card-image">
      <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-grid')) . '">
      </div>
      <div class="card-content grey-text text-darken-4" style="padding:8px">
        <small>' . $recent["post_title"] . '</small>
      </div>
      <a class="view-more" href="' . get_permalink($recent["ID"]) . '"></a>
      </div>
      </div>
    ';
}
wp_reset_query();
?>
</div>
