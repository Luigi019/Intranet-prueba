<?php 
	include "conectardb.php";
	include "acciones.php";
?>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="../../img/favicon.ico" >
	<link rel="icon" type="image/gif" href="../../animated_favicon1.gif" >
    <title>Gestionar usuarios</title>
	<link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/functions.js"></script>
    <script type="text/javascript">
	function Actividades(accion)
	{
		
		if (accion=="Lista de usuarios"){
			document.listar.action="gestionar_usuarios.php";
			document.listar.method="POST";
			document.listar.submit(); 
		}
	}
	function Actividades2(accion){

		if (accion=="Generar PDF"){
			document.listar.action="generarpdf.php";
			document.listar.method="POST";
			document.listar.target="_blank";
			document.listar.submit(); 
		}
		
		
	}
</script>
</head>
<body>
<!-- header -->
<header>
    <center>
        <tr>
            <td>
                <a href="../index.php">
                    <img src="../../img/BANNER GOB.png" width="855" height="100" class="break">
                </a>
            </td>
        </tr>
    </center> 
</header>
    <div class="wrapper">
        <div class="content">
            <div id="header_menu">
                <ul class="nav">
                    <li><a href="../index.php" title="Inicio">Inicio</a></li>
                    <li><a href="#" title="Usuarios">Nosotros</a>
                        <ul>
                            <li><a href="../historia.php" target="principal" >Historia</a></li>
                            <li><a href="../mision.php" target="principal" >Misión</a></li>
                            <li><a href="../vision.php" target="principal" >Visión</a></li>
                        </ul>
                    </li>

                    <li><a href="../noticias.php" title="Noticias">Noticias</a></li>       
                    <li><a href="../contactos.php" title="Contactos">Contactos</a></li>
                    <li><a href="#" target="principal" title="Calendario">Calendario</a>
                        <ul>
                            <li><a href="../prox-cump.php" target="principal">Proximos Cumpleaños</a></li>
                            <li><a href="../prox-events.php" target="principal">Proximos Eventos</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Usuarios">Usuarios</a>
                        <ul>
                            <li><a href="form-reg.php" >Nuevo usuario</a></li>
                            <li><a href="gestionar_usuarios.php" >Lista de usuarios</a></li>
                            <li><a href="mi_perfil.php" >Mi perfil</a></li>
                        </ul>
                    </li>
                    <li><a href="../../salir.php" title="Cerrar Sesión">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
	<br>
    <div class="wrapper" id="lista">
    	<div class="content" id="lista_u">
		<?php 

			$buscar_usuario = ucwords($_GET['buscar_usuario']);

			if (empty($buscar_usuario)) {
				header("location: lista_usuarios.php");
				pg_close($conexion);
			}
		 ?>
			<h2 class="titulo">Resultados de la búsqueda</h2>
			<!-- Poner un fondo para la lista desde aqui -->
			<hr>
			<form name="listar" action="buscar_usuario.php" method="get">
				<a href="form-reg.php" class="btn_new">Crear usuario</a>
				<input type="button" name="Administrar"  class="btn_new" value="Lista de usuarios" onclick="Actividades(this.value)">
				<input type="button" name="Administrar"  class="btn_new" value="Generar PDF" onclick="Actividades2(this.value)">
				<input type="text" name="buscar_usuario" class="buscar_usuario" placeholder="Buscar Usuario">
				<input type="submit" class="buscar_usuario-btn" value="Buscar">

			</form>
	<div class="row">
		<table>
			<tr>
				<th>ID</th>
				<th>Tipo de usuario</th>
				<th>Tipo de empleado</th>
				<th>Oficina</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Cedula</th>
				<th>Sexo</th>
				<th>Estado de nacimiento</th>
				<th>Teléfono</th>
				<th>Correo</th>
				<th>Nombre de usuario</th>
				<th>Acciones</th>
			</tr>
	      <?php 

	        $sql_buscar_usuario = pg_query($db,"SELECT COUNT(*) as total from usuarios 
	                            where (		   nombre like '%$buscar_usuario%' or
	                                           apellido like '%$buscar_usuario%' or
	                                           cedula like '%$buscar_usuario%' or
	                                           correo like '%$buscar_usuario%' or
	                                           usuario like '%$buscar_usuario%' or
	                                           tlf like '%$buscar_usuario%' or
	                                           apellido like '%$buscar_usuario%' or
	                                           usuario like '%$buscar_usuario%'  ) and estatus=1");
	        $result_buscar_usuario = pg_fetch_array($sql_buscar_usuario);
	        $total = $result_buscar_usuario['total'];


	        $query=pg_query($db, "SELECT u.idusuario,a.acceso,t.empleado,o.oficina,u.nombre,u.apellido,u.cedula,s.sexo,e.estado_nac,u.tlf,u.correo,u.usuario FROM usuarios u INNER JOIN acceso a ON u.acceso = a.idacceso INNER JOIN tipo_empleado t ON u.tipo_empleado = t.idempleado INNER JOIN oficina o ON u.oficina = o.idoficina INNER JOIN sexo s ON u.sexo = s.idsexo INNER JOIN estado_nac e ON u.estado_nac = e.idnac WHERE 
	                                                                              (nombre like '%$buscar_usuario%' or
	                                           									   apellido like '%$buscar_usuario%' or
	                                           									   cedula like '%$buscar_usuario%' or
	                                           									   correo like '%$buscar_usuario%' or
	                                           									   usuario like '%$buscar_usuario%' or
	                                           									   tlf like '%$buscar_usuario%' or
	                                           									   apellido like '%$buscar_usuario%' or
	                                           									   usuario like '%$buscar_usuario%' ) and estatus=1 ORDER BY u.idusuario ASC ");
	        pg_close($db); 
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


			 ?>

		</table>

	</div>
</div>
<!-- footer 
<?php include "includes/footer.php"  ?> -->
</div>
</div>
</body>
</html>