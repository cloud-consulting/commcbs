<?php

/**
 * The template for displaying all pages.
 * @package Garitma
 * @author Garitma
 * @link http://garitma.com
 */
get_header(); ?>


   <div id="Content">
	    <div class="row">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) // Post Loop
            : the_post(); ?>


            <?php the_content(); ?>


            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>


<?php get_footer(); ?>