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
                 <?php do_action('second_feed') ?>
    </div>

</div>

<div class="col s12 l4">
            <?php do_action('sidebar') ?>
</div>

<?php
global $wp_query, $paged;
 
 // Paged Parameter
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  
 // The Query
 $query = new WP_Query( $args );
  
 // The Loop
 if ( $wp_query->have_posts() ) {
     while ( $wp_query->have_posts() ) {
         $wp_query>the_post();
          
         // Your Post Data
      
     }
  
     // Your Navigation Code
  
 }
 ?>


            <?php 
            /*
            if (have_posts()) :
             while (have_posts()) // Post Loop
            : the_post();            

            endwhile; 
            */
            ?>

            <?php echo paginate_links(); ?>

            <div class="row no-margin">
                <div class="col s12">
                    <?php wpbeginner_numeric_posts_nav(); ?>
                </div>
            </div>


        <?php endif; ?>




    </div>
</div>



<?php get_footer(); ?>