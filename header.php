<?php

/**
 * The Header for our theme.
 *
 * @package Garitma
 * @author Garitma
 * @link http://garitma.com
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KCTZBT');</script>
<!-- End Google Tag Manager -->

    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css" type="text/css" rel="stylesheet"
        media="screen,projection" />
    <link href="<?php echo get_template_directory_uri(); ?>/style.min.css" type="text/css" rel="stylesheet" media="screen,projection" />

    <title>
        <?php wp_title(''); ?>
    </title>

    <!-- wp_head() -->
    <?php wp_head();
    ?>
</head>

<!-- body -->

<body <?php body_class(); ?>>


    <header>

    <nav class="grey darken-4">
    <ul class="left">
        <li class="grey darken-3"><i class="material-icons">menu</i></li>
        <li><a href="">Selección</a></li>
        <li><a href="">Lo nuestro</a></li>
        <li><a href="">Internacional</a></li>
        <li><a href="">Resultados</a></li>
        <li><a href="">Noticias</a></li>
        <li><a href="">Personajes</a></li>
        <li><a href="">Más deportes</a></li>
    </ul>

    <div class="nav-content hide-on-med-and-down">
      <ul class="tabs tabs-transparent">
        <li>Once calda</li>
        <li>Atletico Nacional</li>
        <li>Millonarios FC</li>
        <li>Deportivo independiente Medellín</li>
      </ul>
    </div>

    </nav>

    </header>

    <main>