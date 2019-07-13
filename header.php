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

    <link rel="stylesheet" href="https://use.typekit.net/vwx1ivg.css">




    <title>
        <?php wp_title(''); ?>
    </title>

  <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21751214561/cbhom1', [300, 250], 'div-gpt-ad-1548543273448-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest(); googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });
</script>
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21751214561/cbhom2', [300, 600], 'div-gpt-ad-1548543391736-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest(); googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });
</script>
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21751214561/cbhom3', [300, 100], 'div-gpt-ad-1548543446323-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest(); googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });
</script>
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21751214561/cbhom4', [320, 50], 'div-gpt-ad-1548543582357-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest(); googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });
</script>
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21751214561/cbhom5', [728, 90], 'div-gpt-ad-1548543616200-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest(); googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
  });
</script>

    <?php wp_head();
    ?>


</head>

<body <?php body_class(); ?>>


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
        <li><a href="<?php echo esc_url(home_url('/equipo/once-caldas')); ?>">Once Caldas</a></li>
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
        <li class="hide-on-team-section" ><a href="<?php echo esc_url(home_url('/equipo/once-caldas')); ?>">Once Caldas</a></li>
        <li class="hide-on-team-section"><a href="<?php echo esc_url(home_url('/equipo/atletico-nacional')); ?>">Atletico Nacional</a></li>
        <li class="hide-on-team-section"><a href="<?php echo esc_url(home_url('/equipo/millonarios-fc')); ?>">Millonarios FC</a></li>
        <li class="hide-on-team-section"><a href="<?php echo esc_url(home_url('/equipo/deportivo-independiente-medellin')); ?>">Deportivo independiente Medellín</a></li>
  

  </ul>   

    </header>

    <main>

    <div class="content">
	    <div class="row">

          <!-- ADS 1er -->

          <?php do_action('CB_HOM_1') ?>

          <?php 
            if ( is_front_page() && is_home() )  {
              // Default HOM
              do_action('CB_1er_HOM');
            } elseif ( in_category( '1' )) {
              // DPT
              do_action('');
            } elseif ( in_category( '2' )) {
              // INT
              do_action('');
            } elseif ( in_category( '2' )) {
              // NOT
              do_action('');
            } elseif ( in_category( '2' )) {
              // NUE
              do_action('');
            } elseif ( in_category( '2' )) {
              // PER
              do_action('');
            } elseif ( in_category( '2' )) {
              // RES
              do_action('');
            } elseif ( in_category( '2' )) {
              // SEL
              do_action('');
            } else {
              //everything else
              do_action('');
            }