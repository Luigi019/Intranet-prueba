<?php
	include "conectardb.php";
	include "acciones.php";
	$mensaje = agregar(); 

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>
			Guardar
		</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="../../img/favicon.ico" >
		<link rel="icon" type="image/gif" href="../../img/animated_favicon1.gif" >
		<style type="text/css">
* {
	
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body {
	background: #0b2027;
	font-family: 'Arial', sans-serif;
	line-height: 18px;
}
td{
	text-decoration: none;
	color:#fff;
}

	</style>
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
							
							<a href="administrar.php">
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
				