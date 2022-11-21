<?php
session_start();
	function validar_login(){
	$alert = '';
	if (!empty($_SESSION['active'])) {
	  header('location: sistema/');
	}
	else {
	  if (!empty($_POST)){

	    if (empty($_POST['usuario']) || empty($_POST['clave'])) {
	      $alert = 'Por favor, ingrese su usuario y su clave.';
	    }
	  //  if($_POST['captcha'] <> $_SESSION['captcha_texto']){
		//	header('Location: error_captcha.php');
		//}
	    else {
	      require "conectardb.php";
	      $result = '';
	      $user = pg_escape_string($db,$_POST['usuario']);
	      $pass = md5(pg_escape_string($db,$_POST['clave']));


	      $query = pg_query($db, "SELECT * FROM usuarios WHERE usuario = '$user' AND clave = '$pass'");
	      $result = pg_num_rows($query);

	      if ($result > 0){

	        $data = pg_fetch_array($query);
	        $_SESSION['active'] = true;
	        $_SESSION['idusuario'] = $data['idusuario'];
	        $_SESSION['nombre'] = $data['nombre'];
	        $_SESSION['apellido'] = $data['apellido'];
	        $_SESSION['acceso']    = $data['acceso'];
	        $_SESSION['correo']  = $data['correo'];
	        $_SESSION['sexo'] = $data['sexo'];
	        $_SESSION['usuario']   = $data['usuario'];
	        $_SESSION['cedula']   = $data['cedula'];
	        $_SESSION['sexo']   = $data['sexo'];
	        $_SESSION['tlf']   = $data['tlf'];
	        $_SESSION['oficina']   = $data['oficina'];
	        $_SESSION['tipo_empleado']   = $data['tipo_empleado'];
	        $_SESSION['estado_nac']   = $data['estado_nac'];
	        $_SESSION['estatus'] = $data['estatus'];

	        header('location: sistema/');

	      }
	      else {
	      	header('location: error_acceso.php');
	        session_destroy();      
	        }
	      }
	    }
	  }
	}
	function valida_usuario(){
		if (empty($_SESSION['active'])) {
			header('location: ../');
	}
	
	}
	function enviarcorreo($para, $asunto, $msj){	
		//Mensaje
		$mensaje_html = '
		<html>
			<head>
				<title>
					Proyecto INSA
				</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    	
			</head>
			<body>
			'.$msj.'
			</body>
		</html>	
		';
		
		//Se indica que el correo que se enviara en formato html
		$cabecera  = 'MIME-Version: 1.0' . "\r\n";
		$cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		//adicional
		$cabecera .= 'To: <'.$para.'>' . "\r\n";
		$cabecera .= 'From: proyectoinsa.com <proyectoinsa@minhvi.inmo.com>' . "\r\n";
		//$cabecera .= 'Cc: concopia@ejemplo.com' . "\r\n";
		//$cabecera .= 'Bcc: concopiaoculta@ejemplo.com' . "\r\n";
		
		mail($para, $asunto, $mensaje_html, $cabecera);
	}
	function obtenerProposito(){

		$proposito = array();
		$resultado = pg_query("SELECT * FROM proposito");
		while ($row = pg_fetch_array($resultado)) {
			$proposito[]=$row;
		}

		pg_free_result($resultado);
		return $proposito;
	}
?>
