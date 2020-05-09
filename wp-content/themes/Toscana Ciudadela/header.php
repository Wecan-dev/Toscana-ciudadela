<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='UTF-8'>
  <title><?php bloginfo('name');?></title>

	<!-- Behavioral Meta Data -->
	<meta content='width=device-width, initial-scale=1, user-scalable=no' name='viewport'>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content='#205250' name=' theme-color'>
	
	<!-- Google Meta Data -->
	<meta name='description', content='<?php bloginfo('description');?>'>
	<meta name='keywords', content=''>
	<meta name="robots" content="index, follow">

		<!-- Blog Meta Data -->
	<meta name="dc.language" content="es">
	<meta name="dc.source" content="<?php bloginfo('url');?>">
	<meta itemprop="url" content="<?php bloginfo('url');?>">

	<!-- Twitter Card Meta Data -->
	<meta content='summary' name='twitter:card'>
	<meta content='Paginas web' name='twitter:site'>
	<meta content='Paginas web' name='twitter:title'>
	<meta content='Paginas web' name='twitter:description'>

	<!-- Open Graph Meta Data -->
	<meta content='website' property='og:type'>
	<meta content='<?php echo get_template_directory_uri(); ?>/assets/img/logo-header.png' property='og:image'>
	<meta property="og:site_name" content="">
	<meta property="og:title" content="">
	<meta content='' property='og:description'>
	<meta property="og:type" content="">
	<meta property="og:image" content="">

	<!-- Links -->
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/animate/animate.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/slick/slick.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/slick/slick-theme.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/main.css' rel='stylesheet'>
  <link href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png"  rel="icon" type="image/png" sizes="32x32">
	<?php wp_head(); ?>
</head>

<body>
  <div class="pd-top">

    <div class="fixed-buttons">
      <a class="whatsapp" href="https://api.whatsapp.com/send?phone=573148775701" target="blank">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/whatsapp.png">
      </a>
      <div class="js-gotop">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/top.png">
      </div>
    </div>
    <nav class='navbar navbar-expand-lg'>
      <a class='navbar-brand' href='#'>
        <img src='<?php echo get_template_directory_uri();?>/assets/img/logos/logo-toscana.png'>
      </a>
      <button aria-controls='toscanaNavbar' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler' data-target='#toscanaNavbar' data-toggle='collapse' type='button'>
        <span class='fa fa-bars'></span>
      </button>
      <div class='collapse navbar-collapse' id='toscanaNavbar'>
        <ul class='navbar-nav mr-auto'>
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='#sabaneta'>Vive en Sabaneta</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='#ciudadela'>Nuestra ciudadela</a>
          </li>
     
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='#proyectos'>Proyectos toscana</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='#ubicacion'>Ubicación</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link scroll-link' href='#contacto'>Contacto</a>
          </li>
        </ul>
        <ul class='navbar-nav ml-auto'>
          <li class='nav-item'>
            <a class='nav-link' href='https://www.facebook.com/nivelpropiedadraiz' target='blank'>
              <i class='fa fa-facebook'></i>
            </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='https://www.instagram.com/nivelpropiedadraiz/' target='blank'>
              <i class='fa fa-instagram'></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>