<?php

	function obtenerDatos(){
		include "conectardb.php";

		$calendario = array();
		$resultado = pg_query($db, "SELECT id_evento, nombre_evento, fecha_evento, hora_evento, lugar_evento, cat_evento 
		FROM eventos INNER JOIN categoria_evento ON id_cat_evento = id_categoria Order by fecha_evento ASC");
		while ($row = pg_fetch_array($resultado)) {
			$calendario[]=$row;
		}

		pg_free_result($resultado);
		return $calendario;
	}

	function obtenerInvitados(){
		include "conectardb.php";

		$invitado = array();
		$resultado = pg_query($db, "SELECT * from invitados ");
		while ($row = pg_fetch_array($resultado)) {
			$invitado[]=$row;
		}

		pg_free_result($resultado);
		return $invitado;
	}
	function obtenerCategorias(){
		include "conectardb.php";

		$categoria = array();
		$resultado = pg_query($db, "SELECT * from categoria_evento ");
		while ($row = pg_fetch_array($resultado)) {
			$categoria[]=$row;
		}

		pg_free_result($resultado);
		return $categoria;
	}
	?>
	<?php
	function obtener_Testimoniales(){
		include "conectardb.php";

		$testimonial = array();
		$resultado = pg_query($db, "SELECT * from testimoniales ");
		while ($row = pg_fetch_array($resultado)) {
			$testimonial[]=$row;
		}

		pg_free_result($resultado);
		return $testimonial;
	}
	

	function selectores_registro(){
	?>
		<p class="input_categoria" id="categoria" align="left">Categoria
        <?php include "conectardb.php"; 
			$query_categoria = pg_query($db,"SELECT * FROM categoria_evento ORDER BY id_categoria ASC");
			$result_categoria = pg_num_rows($query_categoria);
		?>
	        <select class="select_categoria" name="categoria" >            
			<?php 
				if ($result_categoria > 0) 
				{
					while ($categoria = pg_fetch_array($query_categoria)) {
			?>
				<option value="<?php echo $categoria["id_categoria"]; ?>"><?php echo $categoria["cat_evento"] ?></option>
			<?php 
					}
				}
			?>  
<?php 	} 
	function guardar_evento(){
	include "conectardb.php";
	$nombre = $_POST['nombre'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$lugar = $_POST['lugar'];
	$categoria = $_POST['categoria'];
	$query_insert = pg_query($db, "INSERT INTO eventos (nombre_evento, fecha_evento, hora_evento, lugar_evento, id_cat_evento) VALUES ('$nombre','$fecha','$hora','$lugar','$categoria')");
					if ($query_insert) {
						$mensaje = formato_mensaje("evento creado correctamente.");
					}else{
						$mensaje = formato_mensaje("Error al crear el evento.");
					}
	}
	function guardar_invitado(){
		include "conectardb.php";
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$descripcion = $_POST['descripcion'];
		$imagen = $_POST['imagen'];
		$query_insert = pg_query($db, "INSERT INTO invitados (nombre_invitado, apellido_invitado, descripcion, url_imagen) VALUES ('$nombre','$apellido','$descripcion','$imagen')");
						if ($query_insert) {
							$mensaje = formato_mensaje("invitado creado correctamente.");
						}else{
							$mensaje = formato_mensaje("Error al crear el invitado.");
						}
		}
		function guardar_testimonial(){
			include "conectardb.php";
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$testimonial = $_POST['testimonial'];
			$identificador = $_POST['identificador'];
			$imagen = $_POST['imagen'];
			$query_insert = pg_query($db, "INSERT INTO testimoniales (nombre_persona, apellido_persona, testimonial, identificador, imagen_persona) VALUES ('$nombre','$apellido','$testimonial', '$identificador', '$imagen')");
							if ($query_insert) {
								$mensaje = formato_mensaje("testimonial creado correctamente.");
							}else{
								$mensaje = formato_mensaje("Error al crear el testimonial.");
							}
			}
	function guardar_categoria(){
		include "conectardb.php";
		$nombre = $_POST['nombre'];
		$identificador = $_POST['identificador'];

		$query_insert = pg_query($db, "INSERT INTO categoria_evento (cat_evento, id_categoria) VALUES ('$nombre','$identificador')");
						if ($query_insert) {
							$mensaje = formato_mensaje("categoria creada correctamente.");
						}else{
							$mensaje = formato_mensaje("Error al crear la categoria.");
						}
		}
		
		function modificar_evento(){
			include "conectardb.php";
			if(is_string($_GET['id_evento']) && is_string($_GET['nombre'])){
		
				$resultado = pg_query($db,"UPDATE eventos SET 
										id_evento = '".$_GET['id_evento']."',
										nombre_evento = '".$_GET['nombre']."',
										hora_evento = '".$_GET['hora']."',
										lugar_evento = '".$_GET['lugar']."',
										fecha_evento = ' ".$_GET['fecha'] . "'
										WHERE id_evento = ".$_GET['id_evento']);
									
			
				$mensaje = formato_mensaje("Informaci&oacute;n modificada exitosamente");
			}else{
				$mensaje = formato_mensaje("No hemos podido guardar la informaci&oacute;n");
			}
			return $mensaje;
			}
			
			function obtener1categoria ($cod_categoria){

				$categoria = array();
				$resultado = pg_query("SELECT * FROM categoria_evento where 
				id_categoria = ".$cod_categoria);
				while ($row = pg_fetch_array($resultado)) {
					$categoria=$row;
				}
		
				pg_free_result($resultado);
				return $categoria; 
			}
			function modificar_categoria(){
				include "conectardb.php";
				if(is_string($_GET['id_categoria']) && is_string($_GET['cat_evento'])){
			
					$resultado = pg_query($db,"UPDATE categoria_evento SET 
											id_categoria = '".$_GET['id_categoria']."',
											cat_evento = ' ".$_GET['cat_evento'] . "'
											WHERE id_categoria = ".$_GET['id_categoria']);
										
				
					$mensaje = formato_mensaje("Informaci&oacute;n modificada exitosamente");
				}else{
					$mensaje = formato_mensaje("No hemos podido guardar la informaci&oacute;n");
				}
				return $mensaje;
				}
				
				function obtener1evento ($cod_eventos){
	
					$eventos = array();
					$resultado = pg_query("SELECT * FROM eventos where 
					id_evento = ".$cod_eventos);
					while ($row = pg_fetch_array($resultado)) {
						$eventos=$row;
					}
			
					pg_free_result($resultado);
					return $eventos; 
				}
			
			
	function formato_mensaje($texto){

		$nuevo_texto = "<font color='red'>" . $texto . "</font>";
		return $nuevo_texto;
	}
	function obtener1invitado ($cod_invitado){

		$invitado = array();
		$resultado = pg_query("SELECT * FROM invitados where 
		id_invitado = ".$cod_invitado);
		while ($row = pg_fetch_array($resultado)) {
			$invitado=$row;
		}

		pg_free_result($resultado);
		return $invitado; 
	}
	function modificar_invitado(){
		include "conectardb.php";
		if(is_string($_GET['id_invitado']) && is_string($_GET['nombre_invitado'])){
	
			$resultado = pg_query($db,"UPDATE invitados SET 
									id_invitado = '".$_GET['id_invitado']."',
									nombre_invitado = ' ".$_GET['nombre_invitado'] . "',
									apellido_invitado = ' ".$_GET['apellido_invitado'] . "',
									descripcion = ' ".$_GET['descripcion'] . "',
									url_imagen = ' ".$_GET['url_imagen'] . "'
									WHERE id_invitado = ".$_GET['id_invitado']);
								
		
			$mensaje = formato_mensaje("Informaci&oacute;n modificada exitosamente");
		}else{
			$mensaje = formato_mensaje("No hemos podido guardar la informaci&oacute;n");
		}
		return $mensaje;
		}
		function obtener1testimonial ($cod_testimonial){

			$testimonial = array();
			$resultado = pg_query("SELECT * FROM testimoniales where 
			id_testimonial = ".$cod_testimonial);
			while ($row = pg_fetch_array($resultado)) {
				$testimonial=$row;
			}
	
			pg_free_result($resultado);
			return $testimonial; 
		}
		function modificar_testimonial(){
			include "conectardb.php";
			if(is_string($_GET['id_testimonial']) && is_string($_GET['nombre_persona'])){
		
				$resultado = pg_query($db,"UPDATE testimoniales SET 
										id_testimonial = '".$_GET['id_testimonial']."',
										nombre_persona = ' ".$_GET['nombre_persona'] . "',
										apellido_persona = '".$_GET['apellido_persona']."',
										testimonial = '".$_GET['testimonial']."',
										imagen_persona = '".$_GET['imagen_persona']."',
										identificador = '".$_GET['identificador']."'
										WHERE id_testimonial = ".$_GET['id_testimonial']);
									
			
				$mensaje = formato_mensaje("Informaci&oacute;n modificada exitosamente");
			}else{
				$mensaje = formato_mensaje("No hemos podido guardar la informaci&oacute;n");
			}
			return $mensaje;
			}

	function eliminarEventos(){
		include "conectardb.php"; 

		$resultado = pg_query($db, "DELETE FROM 
		eventos WHERE id_evento = ".$_GET['cod_eventos']);
		return;
	}
	function eliminarInvitados(){
		include "conectardb.php"; 

		$resultado = pg_query($db, "DELETE FROM 
		invitados WHERE id_invitado = ".$_GET['cod_invitado']);
		return;
	}
	function eliminarCategoria(){
		include "conectardb.php"; 

		$resultado = pg_query($db, "DELETE FROM 
		categoria_evento WHERE id_categoria = ".$_GET['cod_categoria']);
		return;
	}
	function eliminarTestimoniales(){
		include "conectardb.php"; 

		$resultado = pg_query($db, "DELETE FROM 
		testimoniales WHERE id_testimonial = ".$_GET['cod_testimonial']);
		return;
	}

?>