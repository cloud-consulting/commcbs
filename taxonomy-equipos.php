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
<ul class="collection no-border transparent">
    <li class="collection-item avatar">
      <img src="<?php $image_data = wp_get_attachment_image_src( $image_id, 'full' ); ?>" alt="" class="circle">
      <span class="title"><?php single_term_title(); ?></span>
      <p></p>
    </li>
  </ul>
</div>

            <div class="col s12">
           <div class="cards-container">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();
            ?>
            

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

    </div>
</div>
<?php get_footer(); ?>