<?php

/**
 * The template for displaying home.
 * @package Garitma
 * @author Garitma
 * @link http://garitma.com
 */
get_header(); ?>

<?php

/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Garitmatic
 * @since Garitmatic 1.0
 */

get_header(); ?>

<?php do_action('news_notify') ?>

<div class="row">



  <div id="content" role="main">

    <div class="col s12 no-padding">

        <div class="col s12 no-padding">
          <?php do_action('featured_feed') ?>
        </div>
        

      <div class="center">
        <?php do_action('home_after_feature_ads') ?>
      </div>

      <div class="col s12">
        <div class="col s12 l8">
         <?php do_action('first_feed') ?>
        </div>

        <div class="col s12 l4 no-padding">
          <?php do_action('first_side_feed') ?>
        </div>
      </div>

    </div>
  </div>
</div>

<?php get_footer(); ?>