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

	function Actividades2(accion){

		if (accion=="Generar PDF"){
			document.buscar_usuario.action="generarpdf.php";
			document.buscar_usuario.method="POST";
			document.buscar_usuario.target="_blank";
			document.buscar_usuario.submit(); 
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
			<h2 class="titulo">Lista de usuarios</h2>
			<!-- Poner un fondo para la lista desde aqui -->
			<hr>
			<form name="buscar_usuario" action="buscar_usuario.php" method="get">
				<a href="form-reg.php" class="btn_new">Crear usuario</a>
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
				obtenerUsuarios();
			?>						
			
		</table>
		<!--Hasta aqui -->
	</div>   
</body>
</html>