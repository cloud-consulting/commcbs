<?php

/**
 * Page Name: Blog
 *
 * @package WordPress
 * @subpackage Trends News
 * @since Trends News 1.0
 */

get_header(); ?>


<div class="content">
    <div class="row">

    <div class="col s12">
    <h1><?php if (is_home() && get_option('page_for_posts')) echo get_the_title(get_option('page_for_posts')); ?>
                            <?php single_cat_title(''); ?></h1>
    </div>


            <div class="col s12 l8">
           <div class="cards-container">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();
            ?>
        
        next_posts_link();    

     <?php do_action('third_feed') ?>

            <?php endwhile; ?>
        </div>

           <div class="row no-margin">
            <div class="col s12">
            <?php wpbeginner_numeric_posts_nav(); ?>
            </div>
        </div>

     
        <?php endif; ?>
    </div>

    
    <div class="col s12 l4">
                 <?php do_action('sidebar') ?>
        </div>

    </div>
</div>
<?php get_footer(); ?>