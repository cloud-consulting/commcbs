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
      <img style="height: auto;" src="<?php echo get_template_directory_uri(); ?>/media/once-caldas.png" alt="" class=" circle square" width="42">
      <span class="title"><?php single_term_title(); ?></span>
      <ul class="tabs">
        <li class="tab"><a class="active blue-text left-align transparent" href="<?php echo esc_url(home_url('categoria/noticias-once-caldas')); ?>">Noticias</a></li>
        <li class="tab"><a class="active blue-text left-align transparent hide" href="<?php echo esc_url(home_url('/noticias')); ?>">Jugadores</a></li>
        <li class="tab"><a class="active blue-text left-align transparent" href="<?php echo esc_url(home_url('categoria/exoncecaldas')); ?>">Ex-Once Caldas</a></li>
        <li class="tab"><a class="active blue-text left-align transparent" href="<?php echo esc_url(home_url('categoria/opinion')); ?>">Opinion</a></li>
        <li class="tab"><a class="active blue-text left-align transparent hide" href="<?php echo esc_url(home_url('/calendario')); ?>">Calendario</a></li>
      </ul>
      <p></p>
    </li>
  </ul>
</div>



            <div class="col s12 l8">
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

    
    <div class="col s12 l4">
                 <?php do_action('sidebar') ?>
        </div>

    </div>
</div>
<?php get_footer(); ?>