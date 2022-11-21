<?php
    include "conectardb.php"; 
    include "acciones.php";
    
    $data = obtener1Usuarios($_GET['idusuario']);
    
    
    $idusuario  = $data['idusuario'];
    $nombre     = $data['nombre'];
    $apellido   = $data['apellido'];
    $cedula     = $data['cedula'];
    $tlf        = $data['tlf'];
    $correo     = $data['correo'];
    $usuario    = $data['usuario'];
    $clave      = $data['clave'];
    $idempleado = $data['idempleado'];
    $empleado   = $data['empleado'];
    $idoficina  = $data['idoficina'];
    $oficina    = $data['oficina'];
    $idsexo     = $data['idsexo'];
    $sexo       = $data['sexo'];
    $idacceso   = $data['idacceso'];
    $acceso     = $data['acceso'];
    $idnac      = $data['idnac'];
    $estado_nac = $data['estado_nac'];
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Eliminar Usuario</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" >
    <link rel="icon" type="image/gif" href="../../img/animated_favicon1.gif" >
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/functions.js"></script>
</head>
<body id="form-reg">
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
    <div class="wrapper">
      <div class="content">
        <h2>Eliminar usuario.</h2>
        <p> Bienvenido al módulo de eliminación, por favor verifique los datos del usuario que desea eliminar para posteriormente proceder.</p>
        <div class="contenedor-form" align="center" >
          <h2><b>¿Está seguro de eliminar el siguiente usuario del sistema?</b></h2>
          <p>Nombre: <span><?php echo $nombre; ?></span></p>
          <p>Apellido: <span><?php echo $apellido; ?></span></p>
          <p>Cedula: <span><?php echo $cedula; ?></span></p>
          <p>Teléfono: <span><?php echo $tlf; ?></span></p>
          <p>Correo: <span><?php echo $correo; ?></span></p>
          <p>Nombre de usuario: <span><?php echo $usuario; ?></span></p>
          <p>Teléfono: <span><?php echo $tlf; ?></span></p>
          <p>Sexo: <span><?php echo $sexo; ?></span></p>
          <p>Lugar de nacimiento: <span><?php echo $estado_nac; ?></span></p>
          <p>Tipo de empleado: <span><?php echo $empleado; ?></span></p>
          <p>Nivel de acceso en el sistema: <span><?php echo $acceso; ?></span></p>
          <p>Oficina: <span><?php echo $oficina; ?></span></p>

          <form method="POST" action="gracias_borrar.php">
            <input type="hidden" name="idusuario" value="<?php echo $idusuario; ?>">
            <a href="gestionar_usuarios.php" class="cancel">Cancelar</a>
            <input type="submit" class="aceptar"value="Aceptar">
          </form>

        </div>
      </div>
    </div>
</body>
</html>