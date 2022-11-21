<?php
	include_once "acciones.php";
	validar_login();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio de sesión | Intranet</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico" >
	<link rel="icon" type="image/gif" href="img/animated_favicon1.gif" >
	<script language="javascript">
		function validar_formulario(){
			
			if(document.form1.usuario.value=='' 
			|| document.form1.clave.value=='' 
			|| document.form1.captcha.value==''){
			
				alert("Todos los campos son obligatorios");
			
			} else {
				
		document.form1.action= "validar_usuario.php";
    document.form1.method= 'POST';
    document.form1.submit();
			}

		}
	</script>	
</head>
<body>
	<center>
		<br>
		<br>
		<h2>Inicio de sesión</h2>
		<p class="parrafo"><b>	Bienvenido al módulo de Inicio de sesión, por favor complete la infomación para continuar.</p>
		<div class="alert"></b><br></div>
	</center> 
	<section id="container">
		<form name="form1" method="post">	
			<input name="usuario" type="text" id="usuario" value="" class="span3" placeholder="Usuario">
			<input name="clave" type="password" id="clave" value="" class="span3" placeholder="Contrase&ntilde;a">
			<p class="img" id="img">
				<img src="captcha.php">
			</p>
				<input name="Captcha" type="text" id="captcha" value="" class="span3" placeholder="captcha">
				
			<div class="enviar">
				<input type="submit" onClick="validar_formulario()" value="INGRESAR">
			</div>

		</form>
		<a href="generarpdf_solicitud.php" target="_blank">Generar Solicitud de Creacion de usuario</a>
	</section>	
</body>
</html>