<?php
    // Definir un nombre para cachear
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);

    // Definir archivo para cachear (puede ser .php también)
	$archivoCache = 'cache/'.$pagina.'.php';
	// Cuanto tiempo deberá estar este archivo almacenado
	$tiempo = 120;
	// Checar que el archivo exista, el tiempo sea el adecuado y muestralo
	if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
   	include($archivoCache);
    	exit;
	}
	// Si el archivo no existe, o el tiempo de cacheo ya se venció genera uno nuevo
	ob_start();
?>
<html>
  <head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="css/colorbox.css">
 
	<link rel="shortcut icon" href="img/favicon.ico" >
	<link rel="icon" type="image/gif" href="img/animated_favicon1.gif" >
  <meta name="theme-color" content="#fafafa">
</head>
<body>

<header class="site-header">
<div class="banner contenedor">
<br>
</div>
<div class="hero">
  <br> 
  <br><a href="index.php"><img src="img/images/prev.png" alt="volver" align="left"></a>
  <h1 align="center" class="nombre-sitio"><i class="fas fa-calendar-alt"></i>  Calendario de Eventos <i class="fas fa-calendar-alt"></i></h1>
     <div class="informacion-calendario"> <div class="clearfix">
      <p class="fecha"><i class="fas fa-calendar-alt"></i>  <?php    setlocale(LC_TIME, 'spanish');   
      $time =time();
      echo date('D, d-m-Y', $time) ;?>  </p>
      <p class="lugar"><i class="fas fa-map-marker-alt"></i>Inmobiliaria Nacional</p>
</div> </div>

</div> </header>
    
<div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="logo inmobiliaria"></a>
      </div>
      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navegacion-principal">
      <a href="festejos.php">Festejos</a>
      <a href="calendario.php">Calendario</a>
      <a href="invitados.php">Invitados</a>
      <a href="admin/gestionar-eventos.php">Gestionar Eventos</a>
      </nav>
    </div>
</div>

