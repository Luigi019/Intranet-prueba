<?php
	include "conectardb.php";
	include "acciones.php";
	eliminar(); 

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Gracias por usar el sistema.</title>
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
<br>
<br>
<br>
<div class="wrapper">
    <div class="content">
      	<h2>Resultado de la operación</h2>
			<h3>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;Usuario eliminado con éxito.	
			</h3><br>	
			<a href="gestionar_usuarios.php">
				<img src="imagenes/aceptar.jpg" border="0">
			</a>				
	</div>
</div>
	</body>
</html> 	
								