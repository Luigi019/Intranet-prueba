<?php
	include "conectardb.php";
	include "acciones.php";
	$mensaje = modificar(); 
	


?>
<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="../../img/favicon.ico" >
	<link rel="icon" type="image/gif" href="../../img/animated_favicon1.gif" >
    <title>Modificar || Intranet</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  <style type="text/css">
* {
  
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  background: #1a95d5;
  font-family: 'Arial', sans-serif;
  line-height: 18px;
  text-decoration: none;
  color:#fff;
}

  </style>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
	<body>

	<section>
	
		<article>
		
				<fieldset>
					<legend>
						<img src="imagenes/mensaje.jpg" border="0" align="middle">
					</legend>
							<h3>
								<?php  echo $mensaje;?>	
							</h3>
							
							<a href="gestionar_usuarios.php">
								<img src="imagenes/aceptar.jpg" border="0">
							</a>
						
				</fieldset>
				
				
		</article>

	</section>


  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>   
	</body>
</html> 	
