<?php

	function obtenerUsuarios(){
		include "conectardb.php";
		$query=pg_query($db, "SELECT u.idusuario,a.acceso,t.empleado,o.oficina,u.nombre,u.apellido,u.cedula,s.sexo,e.estado_nac,u.tlf,u.correo,u.usuario FROM usuarios u INNER JOIN acceso a ON u.acceso = a.idacceso INNER JOIN tipo_empleado t ON u.tipo_empleado = t.idempleado INNER JOIN oficina o ON u.oficina = o.idoficina INNER JOIN sexo s ON u.sexo = s.idsexo INNER JOIN estado_nac e ON u.estado_nac = e.idnac WHERE estatus = 1 ORDER BY idusuario ASC");
		$result=pg_num_rows($query);
				
		if ($result > 0) {
			while ($data = pg_fetch_array($query)) {

?>

	<tr>
		<td><?php echo $data['idusuario'];?></td>
		<td><?php echo $data['acceso'];?></td>
		<td><?php echo $data['empleado'];?></td>
		<td><?php echo $data['oficina'];?></td>
		<td><?php echo $data['nombre'];?></td>
		<td><?php echo $data['apellido'];?></td>
		<td><?php echo $data['cedula'];?></td>
		<td><?php echo $data['sexo'];?></td>
		<td><?php echo $data['estado_nac'];?></td>
		<td><?php echo $data['tlf'];?></td>
		<td><?php echo $data['correo'];?></td>
		<td><?php echo $data['usuario'];?></td>
		<td>
			<a class="link_edit" href="editar.php?idusuario=<?php echo $data['idusuario']; ?>">Editar</a>
			|
			<a class="link_delete" href="borrar.php?idusuario=<?php echo $data['idusuario']; ?>">Eliminar</a>
		</td>
	</tr>
	<?php
				
			}
		}


	
	}
		
	function selectores_registro(){
		?>
		<p class="input_sexo" id="sexo" align="left">Sexo
        <?php include "conectardb.php"; 
			$query_sexo = pg_query($db,"SELECT * FROM sexo ORDER BY idsexo ASC");
			$result_sexo = pg_num_rows($query_sexo);
		?>
	        <select class="select_sexo" name="sexo" >            
			<?php 
				if ($result_sexo > 0) 
				{
					while ($sexo = pg_fetch_array($query_sexo)) {
			?>
				<option value="<?php echo $sexo["idsexo"]; ?>"><?php echo $sexo["sexo"] ?></option>
			<?php 
					}
				}
			?>  
	        </select>
        </p>
        <p class="input_estado" id="estadoR" align="left">Lugar de nacimiento  
        <?php
        include "conectardb.php"; 
			$query_estado = pg_query($db,"SELECT * FROM estado_nac ORDER BY idnac ASC");
			$result_estado = pg_num_rows($query_estado);
        ?>
	        <select class="select_estado" name="estado_nac" >
				<?php 
	            	if ($result_estado > 0) {
						while ($estado = pg_fetch_array($query_estado)) { 
				?>
				<option value="<?php echo $estado["idnac"]; ?>"><?php echo $estado["estado_nac"] ?></option>
				<?php
						}
					}
				?>
			</select>
        </p>
		<p class="tipo_empleado" id="tipo_empleadoR" align="left">Tipo de Empleado
		<?php
			include "conectardb.php"; 
            $query_empleado = pg_query($db,"SELECT * FROM tipo_empleado ORDER BY idempleado ASC");
            $result_empleado = pg_num_rows($query_empleado);
		?>
			<select class="select_empleado" name="tipo_empleado" >        
				<?php 
					if ($result_empleado > 0) 
                    {
                    	while ($empleado = pg_fetch_array($query_empleado)) {
				?>
				<option value="<?php echo $empleado["idempleado"]; ?>"><?php echo $empleado["empleado"] ?></option>
				<?php 
						}
					}
				?>
			</select>
		</p>
        <p class="tipo_usuario" id="tipo_usuarioR" align="left">Tipo de Usuario
        <?php
        	include "conectardb.php"; 
            $query_acceso = pg_query($db,"SELECT * FROM acceso ORDER BY idacceso ASC");
            $result_acceso = pg_num_rows($query_acceso);
		?>
			<select class="select_usuario" name="acceso" >        
				<?php 
					if ($result_acceso > 0) 
                    {
                    	while ($acceso = pg_fetch_array($query_acceso)) {
				?>
				<option value="<?php echo $acceso["idacceso"]; ?>"><?php echo $acceso["acceso"] ?></option>
				<?php 
						}
					}
				?>  

			</select>
		</p>
		<p class="oficina" id="oficina" align="left">Oficina
        <?php
			include "conectardb.php"; 
			$query_oficina = pg_query($db,"SELECT * FROM oficina ORDER BY idoficina ASC");
			$result_oficina = pg_num_rows($query_oficina);
		?>
			<select class="select_oficina" name="oficina" >        
				<?php 
					if ($result_oficina > 0) 
                    {
						while ($oficina = pg_fetch_array($query_oficina)) {
				?>
				<option value="<?php echo $oficina["idoficina"]; ?>"><?php echo $oficina["oficina"] ?></option>
				<?php 
						}
					}
	}


	function guardar_registro(){
	include "conectardb.php";
		if (!empty($_POST)) {
			$mensaje='';
			if (empty($_POST['acceso']) || empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['cedula']) || empty($_POST['sexo']) || empty($_POST['tlf']) || empty($_POST['estado_nac']) || empty($_POST['correo']) || empty($_POST['tipo_empleado']) || empty($_POST['oficina']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['confirm_clave'])) {

					$mensaje='Todos los campos son obligatorios.';
		}else{

			if($_POST['clave'] == $_POST['confirm_clave']){

				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$cedula = $_POST['cedula'];
				$tlf = $_POST['tlf'];
				$correo  = $_POST['correo'];
				$user   = $_POST['usuario'];
				$clave  = md5($_POST['clave']);
				$sexo = $_POST['sexo'];
				$state = $_POST['estado_nac'];
				$empleado = $_POST['tipo_empleado'];
				$rol    = $_POST['acceso'];
				$oficina = $_POST['oficina'];

				$query_check = pg_query($db,"SELECT * FROM usuarios WHERE usuario = '$user' OR correo = '$correo' OR cedula = '$cedula' ");
				$result = pg_fetch_array($query_check);

				if ($result > 0) {
					$mensaje = formato_mensaje("El correo, cédula, o el usuario ingresado ya existe actualmente.");
				}else{
					$query_insert = pg_query($db, "INSERT INTO usuarios (nombre,apellido,cedula,tlf,correo,usuario,clave,sexo,estado_nac,tipo_empleado,acceso,oficina) VALUES ('$nombre','$apellido','$cedula','$tlf','$correo','$user','$clave','$sexo','$state','$empleado','$rol','$oficina')");
					if ($query_insert) {
						$mensaje = formato_mensaje("Usuario creado correctamente.");
					}else{
						$mensaje = formato_mensaje("Error al crear el usuario.");
					}
				}
			}else{
				$mensaje = formato_mensaje("Las contraseñas no coinciden.");
			}
		}
		}
	}



	function formato_mensaje($texto){

		$nuevo_texto = "<font color='red'>" . $texto . "</font>";
		return $nuevo_texto;
	}
	



	function eliminar(){
		include "conectardb.php"; 

	if (!empty($_POST)) {
		$idusuario = $_POST['idusuario'];
		
		//$query_delete = pg_query($conexion,"DELETE FROM usuarios WHERE idusuario = '$idusuario'"); Eliminara completamente el registro
		
		//Desactivara el usuario, dejando un respaldo en la base de datos
		$query_delete = pg_query($db,"UPDATE usuarios SET estatus = 0 WHERE idusuario = $idusuario"); 
		if ($query_delete) {
			header('Location: gestionar_usuarios.php');
		}else{
			echo $mensaje = formato_mensaje("Ha ocurrido un error al eliminar el registro.");
			return $mensaje;
		}
	}

	if (empty($_REQUEST['idusuario'])) {
		header("Location: gestionar_usuarios.php");
	}else{
		

		$idusuario = $_REQUEST['idusuario'];

		$query = pg_query($db, "SELECT u.nombre,u.apellido,o.oficina,u.correo,u.tlf FROM usuarios u INNER JOIN oficina o ON u.oficina = o.idoficina WHERE u.idusuario = $idusuario");

		$result = pg_num_rows($query);

		if ($result > 0) {
			while ($data = pg_fetch_array($query)) {
			$nombre     = $data['nombre'];
			$apellido   = $data['apellido'];
			$correo     = $data['correo'];
			$tlf        = $data['tlf'];
			$oficina    = $data['oficina'];

			}
		}else{
			header("Location: gestionar_usuarios.php");
		}
	}

	}

	function modificar(){
		include "conectardb.php";
		if (!empty($_POST)) {
			$mensaje  = formato_mensaje("");
			if(empty($_POST['idusuario']) || empty($_POST['acceso']) || empty($_POST['tipo_empleado']) || empty($_POST['oficina']) || empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['cedula']) || empty($_POST['sexo']) || empty($_POST['estado_nac']) || empty($_POST['tlf']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['confirm_clave'])){

				$mensaje = formato_mensaje("Todos los campos son obligatorios.");
				return $mensaje;
			}else{

			        $idusuario = $_POST['idusuario'];
			        $acceso = $_POST['acceso'];
			        $tipo_empleado = $_POST['tipo_empleado'];
			        $oficina = $_POST['oficina'];
			        $nombre = $_POST['nombre'];
			        $apellido = $_POST['apellido'];
			        $cedula = $_POST['cedula'];
			        $sexo = $_POST['sexo'];
			        $estado_nac = $_POST['estado_nac'];
			        $tlf = $_POST['tlf'];
			        $correo = $_POST['correo'];
			        $usuario = $_POST['usuario'];
			        $clave = md5($_POST['clave']);
			        $confirm_clave = md5($_POST['confirm_clave']);
					
					$query = pg_query($db,"SELECT * FROM usuarios WHERE (cedula='$cedula' AND idusuario != $idusuario) OR 
	                                  (usuario='$usuario' AND idusuario != $idusuario) OR 
	                                  (tlf = '$tlf' AND idusuario != $idusuario) OR 
	                                  (correo = '$correo' AND idusuario != $idusuario)");
					$result = pg_fetch_array($query);

					if ($result > 0) {
						$mensaje = formato_mensaje("La cédula, usuario, teléfono, o el correo electrónico ingresado actualmente se encuentra registrado en el sistema, por favor verifique.");return $mensaje;
					}else{
						if ($clave == $confirm_clave) {
						
						$sql_update = pg_query($db, "UPDATE usuarios SET acceso='$acceso', tipo_empleado='$tipo_empleado', oficina='$oficina', nombre='$nombre', apellido='$apellido',cedula='$cedula', sexo='$sexo',estado_nac='$estado_nac',tlf='$tlf',correo='$correo',usuario='$usuario',clave='$clave' WHERE idusuario='$idusuario'");

						if ($sql_update) {
							$mensaje = formato_mensaje("Usuario actualizado correctamente.");return $mensaje;
						}else{
							$mensaje = formato_mensaje("Error al actualizar el usuario.");return $mensaje;
						}
					}else{
					$mensaje = formato_mensaje("Las contraseñas no coinciden.");
					return $mensaje;
				}
			}
		}
	}	
			/*$resultado = pg_query("UPDATE usuarios SET 
									nombre = '".$_GET['nombre']."',
									apellido = '".$_GET['apellido']."',
									cedula = '".$_GET['cedula']."',
									sexo = '".$_GET['sexo']."',
									apellido = '".$_GET['apellido']."',
									apellido = '".$_GET['apellido']."',
									correo = '".$_GET['correo']."' 
									WHERE idusuario = ".$_GET['idusuario']);
			/*echo "UPDATE usuarios SET 
									nombres = '".$_GET['nombres']."',
									apellidos = '".$_GET['apellidos']."',
									correo = '".$_GET['correo']."' 
									WHERE codigo = ".$_GET['codigo'];*/
								
								
		
			/*$mensaje = formato_mensaje("Informaci&oacute;n modificada exitosamente");
		}
		}*/
	}


	function obtener1Usuarios ($idusuario){

		$usuarios = array();
		$resultado = pg_query("SELECT * FROM usuarios u INNER JOIN acceso a ON u.acceso = a.idacceso INNER JOIN tipo_empleado t ON u.tipo_empleado = t.idempleado INNER JOIN oficina o ON u.oficina = o.idoficina INNER JOIN sexo s ON u.sexo = s.idsexo INNER JOIN estado_nac e ON u.estado_nac = e.idnac WHERE idusuario= $idusuario");
		while ($row = pg_fetch_array($resultado)) {
			$usuarios=$row;
		}

		pg_free_result($resultado);
		return $usuarios; 
	}
	
	return ;
	

?>
