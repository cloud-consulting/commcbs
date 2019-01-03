<?php $args = array(
  'numberposts' => '1',
  'post_status' => 'publish',
);

$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
  echo '

  <div class="card">
    <div class="card-image">
        <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'trends-grid')) . '">
    </div>
    <a class="view-more" href="' . get_permalink($recent["ID"]) . '"></a>
</div>

    ';
}
wp_reset_query();
?>
