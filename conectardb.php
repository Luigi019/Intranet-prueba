<?php
	$dbservidor 	= "localhost"; 	// Servidor
	$dbusuario 		= "postgres"; 		// Usuario
	$dbclave	 	= "1234"; 		// clave 
	$basededatos 	= "Intranet_V1"; 	// Base de datos
	$db = pg_pconnect("host=$dbservidor port=5432 dbname=$basededatos 
	user=$dbusuario password=$dbclave");

	if(!$db){
		echo "<font color='red'><center>En este momento no es posible establecer una comunicaci�n 
		con el servidor, <br>intente mas tarde</center></font>"; 
	}else{
		//echo "ok";
	}
?>