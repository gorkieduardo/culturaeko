<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
	 
    
	<meta name="title" content="CULTURAEKO, revista de Cultura y Economía." />
    <meta name="description" content="CUTURAEKO aborda temas sobre cultura, economía e informática. CULTURAEKO, está adscrita al CEED, centro de investigaciones educativas en la era digital." />
    <meta http-equiv="content-language" content="es_NI" />
    <meta name="robots" content="index, follow" />
    <meta name="url" content="http://culturaeko.com/" />
    <meta name="author" content="Eduardo Estrada Montenegro, escritor y periodista" />
	<meta name="msvalidate.01" content="67EA289A3DB4EBE729FA59BA385E3D4D" />
    <link href="http://culturaeko.com/" rel="home" />
    <link rel="canonical" href="http://culturaeko.com/" />
   
    <?php wp_head(); ?>


  </head>
  <body>
	  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=773402549448990&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	 

    <header class="encabezado-sitio container">
        <div class="row justify-content-md-between align-items-center">
          <div class="col-xs-12 col-md-6 col-lg-4">
              <p class=""><small>San José, Costa Rica, <em><?php echo date('d-m-Y'); ?></em></small></p>
              
			   <img src="<?php echo get_template_directory_uri(); ?>/img/ca.png" class="d-none d-lg-block">
         
          </div>
            <div class="col-lg-4">
              <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-fluid mx-auto d-block pt-4 pb-4">
              </a>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">

              <?php
              $args = array(
                'container' => 'nav',
                'container_class' => 'sociales text-center text-md-right pt-3',
                'link_before' =>'<sapn class="sr-only"',
                'link_after'=> '</span>',
                'theme_location'=> 'social_menu'
              );
              wp_nav_menu($args);
            ?>

            </div>
        </div>
    </header>

    <div class="navegacion container sticky-top py-1">
      <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal" aria-label="Mostrar Navegacion">
              <span class="navbar-toggler-icon"></span>
          </button>
          <a href="#" class="navbar-brand d-lg-none">CULTURAEKO</a>

      <div class="container">
          <?php
          $args =array(
            'menu_class' => 'navbar-expand-md nav nav-justified flex-column flex-sm-row',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'nav_principal',
            'theme_location' => 'menu_principal'
          );
          wp_nav_menu($args);
           ?>
          </div><!--.container-->
      </nav>
    </div>
	<div itemscope itemtype="http://schema.org/ScholarlyArticle">



 
   
  </body>
</html>
