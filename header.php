<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TJCHSWV');</script>
<!-- End Google Tag Manager -->


    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"
    />
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" media="screen,projection"
    />

    <link rel="stylesheet" href="https://use.typekit.net/vwx1ivg.css">




    <title>
        <?php wp_title(''); ?>
    </title>

    <?php wp_head();
    ?>


</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJCHSWV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <header>
<div>

<div class="navbar-fixed">
    <nav class="nav-extended black">
    <div class="nav-wrapper smush">
    
      <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/media/logo-casa-blanca.png"></a>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger grey darken-3"><i class="material-icons">menu</i></a>
      <a  href="#share" class="modal-trigger share"><i style="padding:0 15px;" class="material-icons white-text right hide-on-large-only">reply</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo esc_url(home_url('/equipo/seleccion-colombia')); ?>">Selección</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Noticias</a></li>
        <li><a href="<?php echo esc_url(home_url('/categoria/mas-deportes')); ?>">Más deportes</a></li>
    </ul>
    </div>

    <div class="nav-content hide-on-med-and-down hide-on-team-section">
      <ul class="tabs tabs-transparent blue valign-wrapper">
      <div class="smush">
        <li><a href="<?php echo esc_url(home_url('/equipo/once-caldas')); ?>">Once caldas</a></li>
        <li><a href="<?php echo esc_url(home_url('/equipo/atletico-nacional')); ?>">Atletico Nacional</a></li>
        <li><a href="<?php echo esc_url(home_url('/equipo/millonarios-fc')); ?>">Millonarios FC</a></li>
        <li><a href="<?php echo esc_url(home_url('/equipo/deportivo-independiente-medellin')); ?>">Deportivo independiente Medellín</a></li>
      </ul>
</div>
    </div>
  </nav>
</div>

  <ul id="nav-mobile" class="sidenav black white-text">
        <li><a href="<?php echo esc_url(home_url('/equipo/seleccion-colombia')); ?>">Selección</a></li>
        <li><a href="<?php echo esc_url(home_url('/lo-nuestro')); ?>">Lo nuestro</a></li>
        <li><a href="<?php echo esc_url(home_url('/resultados')); ?>">Resultados</a></li>
        <li><a href="<?php echo esc_url(home_url('/noticias')); ?>">Noticias</a></li>
        <li><a href="<?php echo esc_url(home_url('/personajes')); ?>">Personajes</a></li>
        <li><a href="<?php echo esc_url(home_url('/mas-deportes')); ?>">Más deportes</a></li>
        <li class="hide-on-team-section"><div class="divider"></div></li>
        <li class="hide-on-team-section" ><a href="<?php echo esc_url(home_url('/equipo/once-caldas')); ?>">Once caldas</a></li>
        <li class="hide-on-team-section"><a href="<?php echo esc_url(home_url('/equipo/atletico-nacional')); ?>">Atletico Nacional</a></li>
        <li class="hide-on-team-section"><a href="<?php echo esc_url(home_url('/equipo/millonarios-fc')); ?>">Millonarios FC</a></li>
        <li class="hide-on-team-section"><a href="<?php echo esc_url(home_url('/equipo/deportivo-independiente-medellin')); ?>">Deportivo independiente Medellín</a></li>
  

  </ul>   

  <div class="col s12 center" style="margin-top:60px;">
        <div class="ads">
            <a href="https://wplay.co/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/media/BANNER-WPLAY-CASA-BLANCA-ONCE-CALDAS-728x90.png"></a>
        </div>
    </div>

    </header>

    <main>