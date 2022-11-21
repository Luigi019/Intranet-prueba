<?php

	include "../../conectardb.php"; 
	include "../../acciones.php"; 
	valida_usuario();
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Mi perfil</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" >
    <link rel="icon" type="image/gif" href="../../img/animated_favicon1.gif" >
	<link rel="stylesheet" href="../css/style.css">
	<script type="text/javascript" src="../js/functions.js"></script>
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
    <div class="wrapper">
    	<div class="content">
		<h2>Mi perfil</h2>
		<p align="justify"><b>En construcción...</b></p>
    </div>
  </div>
<!-- footer 
<?php include "includes/footer.php"  ?> -->
</div>
</div>
</body>
</html>