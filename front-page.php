<?php

/**
 * Template Name: Home
 *
 * @package COMMM
 * @subpackage CASA BLANCA SPORTS
 * @since CASA BLANCA SPORTS 1.0
 */

get_header(); ?>

<div class="content">
    <div class="row">

        <div class="col s12 l8">
            <div class="col s12">
                <?php do_action('featured_feed') ?>
            </div>

            <div class="col s12 no-padding">
                <?php do_action('first_feed') ?>
            </div>

            <div class="col s12 no-padding">
                <?php //do_action('second_feed'); ?>
            </div>

        </div>

        

        <div class="col s12 l8">
            <div class="cards-container">

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                <?php do_action('third_feed'); ?>

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