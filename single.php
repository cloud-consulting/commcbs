<?php

/**
 * The template for displaying all post.
 * @package Garitma
 * @author Garitma
 * @link http://garitma.com
 */
get_header(); ?>

<div>

    <div>
        <?php if (have_posts()) :
        ?>

        <?php while (have_posts()) : the_post();
        ?>


    <div class="content">
      
        <div class="">
            <div class="row">
                <div class="col s12 l8 no-padding">
                    <div class="col s12 l10 offset-l2 no-padding">

                    <div class="col s12 img-post no-padding">
                         <?php echo get_the_post_thumbnail() ?>
                     </div>

        

                <div class="col s12">
                <ul class="tag blue-text"><?php the_category( ', ' ); ?></ul>
                <span class="entry-date tag"><span class="grey-text tag">Por</span> <span class="tag"><?php the_author(); ?></span> | <?php echo get_the_date(); ?> </span>
                </div>

                <div class="col s12">
                <h1 class="title-entry"><?php the_title(); ?></h1>
                </div>
               
                <div class="col s12">
                <?php the_content();
                ?>
                </div>

        </div>

        </div>
                
                <div class="col s12 l4 no-padding">
                 <?php do_action('sidebar') ?>
        </div>


        <div class="col s12">
                <?php do_action('gallery_feed') ?>
            </div>

            
    <div class="col s12 white">
        <?php do_action('related_post') ?>
      </div>
      
      <ul class="hide-on-med-and-down" style="position:fixed;    width: 20px;left: 40px;">
        <a href="javascript:fbshareCurrentPage()" class="col s4"><i class="material-icons s facebook  black-text"></i></a>
        <a href="javascript:twshareCurrentPage()" class="col s4"><i class="material-icons s twitter black-text"></i></a>
        <a href="javascript:wpshareCurrentPage()" class="col s4"><i class="material-icons s whatsapp black-text"></i></a>
      </ul>

      <div id="share" class="modal">
    <div class="modal-content row center no-margin">
        <h3 style="marigin-bottom:30px">Comparte</h3>
        <a href="javascript:fbshareCurrentPage()" class="col s4"><i class="material-icons s facebook large black-text"></i></a>
        <a href="javascript:twshareCurrentPage()" class="col s4"><i class="material-icons s twitter large black-text"></i></a>
        <a href="javascript:wpshareCurrentPage()" class="col s4"><i class="material-icons s whatsapp large black-text"></i></a>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>


            </div>

 

        </div>
    </div>

        <?php endwhile; ?>

        <?php else : ?>



        <?php endif; ?>

    </div>
</div>


<?php get_footer(); ?>


<?php get_footer(); ?>