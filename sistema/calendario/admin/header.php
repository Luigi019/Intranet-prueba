
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

  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/lightbox.css">
  <link rel="stylesheet" href="../css/colorbox.css">
  <link rel="stylesheet" href="css/cssmenu.css">
  <script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
	<link rel="shortcut icon" href="img/favicon.ico" >
	<link rel="icon" type="image/gif" href="img/animated_favicon1.gif" >
  <meta name="theme-color" content="#fafafa">
</head>
<body translate="no">

<header class="site-header">
<div class="banner contenedor">
<br>
</div>
<div class="hero">
<br><br>
  <h1 align="center" class="nombre-sitio"><i class="fas fa-calendar-alt"></i>  Calendario de Eventos <i class="fas fa-calendar-alt"></i></h1>
     <div class="informacion-calendario"> <div class="clearfix">
      <p class="fecha"><i class="fas fa-calendar-alt"></i>  <?php    setlocale(LC_TIME, 'spanish');   
      $time =time();
      echo date('D, d-m-Y', $time) ;?>  </p>
      <p class="lugar"><i class="fas fa-map-marker-alt"></i>Inmobiliaria Nacional</p>
</div> </div>

</div> </header>
    <br>
<div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="../index.php"><img src="img/logo.png" alt="logo inmobiliaria"></a>
      </div>
      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navegacion-principal">
      <a href="../festejos.php">Festejos</a>
      <a href="../calendario.php">Calendario</a>
      <a href="../invitados.php">Invitados</a>
      <a href="gestionar-eventos.php">Gestionar Eventos</a>
      </nav>
    </div>
</div>

<?php Include_once 'footer.php'; ?>