
<?php
/*-----------------------------------------------------------------------------------*/
/* hook
/*-----------------------------------------------------------------------------------*/

// Feed

function featured_feed()
{
    include get_parent_theme_file_path('/inc/featured_feed.php');
}
add_action('featured_feed', 'featured_feed');

function gallery_feed()
{
    include get_parent_theme_file_path('/inc/gallery_feed.php');
}
add_action('gallery_feed', 'gallery_feed');

function first_feed()
{
    include get_parent_theme_file_path('/inc/first_feed.php');
}
add_action('first_feed', 'first_feed');

function second_feed()
{
    include get_parent_theme_file_path('/inc/second_feed.php');
}
add_action('second_feed', 'second_feed');


function sidebar()
{
    include get_parent_theme_file_path('/inc/sidebar.php');
}
add_action('sidebar', 'sidebar');

