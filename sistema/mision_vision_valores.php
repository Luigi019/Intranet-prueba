<?php

	include "../conectardb.php"; 
	include "../acciones.php"; 
	$proposito =obtenerProposito();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Proposito</title>
  <link rel="shortcut icon" href="../img/favicon.ico" >
  <link rel="icon" type="image/gif" href="../img/animated_favicon1.gif" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<style>
* {
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body {
	background:#494949;
	font-family: 'Roboto', sans-serif;
	line-height: 18px;
	text-decoration: none;
	color:#fff;

}

</style>

</head>
<body translate="no">
	<?php
						foreach ($proposito as $parrafo) {
			?>
			<h1 align="center">Misi&oacute;n, Visi&oacute;n y Valores</h1>	
			<br><br><br><br>
			<h2 align="center">Misi&oacute;n</h2>
			<br><br>
			<p><?php echo $parrafo ['idmision']; ?></p>
			<br><br>
			<h2 align="center">Visi&oacute;n</h2>
			<br><br>
			<p><?php echo $parrafo ['idvision']; ?></p>
			<br><br>
			<h2 align="center">Valores</h2>
			<br><br>
			<p><?php echo $parrafo ['idvalores']; ?></p>
			<br><br><br><br>

		<?php
				}
			?>	
	<footer>
		
<i><b>Inmobiliaria Nacional, S.A. Av. Orinoco con Calle Perijá, Edificio El Portal, Urbanización Las Mercedes,
Municipio Baruta, Estado Miranda, Venezuela
G-20011415-0 - Telfs.: 0212-909.53.24</b></i>
	</footer>		
</body>
</html>