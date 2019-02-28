<?php $args = array(
  'numberposts' => '1',
  'post_status' => 'publish',
  'meta_key'		=> 'featured_feed',
	 'meta_value'	=> '1'
);

$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
  echo '

  <div class="card">
    <div class="card-image">
        <img src="' . esc_url(get_the_post_thumbnail_url($recent["ID"], 'comm-default')) . '">
    </div>
    <a class="view-more" href="' . get_permalink($recent["ID"]) . '"></a>
</div>

    ';
}
wp_reset_query();
?>
