<html>
<head>
	<meta charset="utf-8">
	<title>Registrar Usuario</title>
	<script language="javascript">
		function validar_formulario(){			
			if(document.registro.nombre.value=='' 
			|| document.registro.apellido.value=='' 
			|| document.registro.cedula.value=='' 
			|| document.registro.tlf.value==''
            || document.registro.correo.value=='' 
			|| document.registro.usuario.value==''
            || document.registro.clave.value==''
            || document.registro.confirm_clave.value==''
            || document.registro.estado_nac.value==''
            || document.registro.acceso.value==''
            || document.registro.sexo.value==''
            || document.registro.tipo_empleado.value==''){	
				alert("Todos los campos son obligatorios");			
			} else {				
				document.registro.submit();
			}
		}
		function sololetras(e) {
   			tecla = (document.all) ? e.keyCode : e.which; 
   			if (tecla==8) return true; // backspace
   			if (tecla==32) return true; // espacio
       		if (e.ctrlKey && tecla==86) { return true;} //Ctrl v
       		if (e.ctrlKey && tecla==67) { return true;} //Ctrl c
       		if (e.ctrlKey && tecla==88) { return true;} //Ctrl x

       		patron = /^[a-zA-z\s\ñ\Ñ]+$/; //patron

       		te = String.fromCharCode(tecla); 
       		return patron.test(te); // prueba de patron
		}
	</script>
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
			<h2><b>Registro de nuevo usuario.</b></h2>
			<p>	Bienvenido al módulo de registro, por favor complete este formulario.</p>
			<div class="contenedor-form" align="center" >
			<div class="mensaje"><?php echo isset($mensaje) ? $mensaje : ''; ?></div>

        		<form action="registro_guardar.php" name="registro" method="post">
                    <p><input type="text" class="input" name="nombre" id="nombre" placeholder="Nombre*" maxlength="50" onblur="revisar(this)" onkeyup="revisar(this)" onKeyDown="return sololetras(event)" required/></p>
                    <p><input type="text" class="input" name="apellido" id="apellido" placeholder="Apellido*" maxlength="50" onblur="revisar(this)" onkeyup="revisar(this)" onKeyDown="return sololetras(event)" required/></p>
                    <p><input type="text" class="number" name="cedula" id="cedula" placeholder="Cédula de identidad*" maxlength="10" onblur="revisar(this)" onkeyup="revisar(this)" onKeyPress="return soloNumeros(event)" required/></p>
                    <p><input type="text" class="number" name="tlf" id="tlf" placeholder="TLF ej. 0414-123.45.67*" maxlength="14" onblur="revisar(this)" onkeyup="revisar(this)" onKeyPress="return soloNumeros(event)" required/></p>
                    <p><input type="email" class="input" name="correo" id="email" maxlength="50" placeholder="Correo electrónico*" onblur="revisar(this)" onkeyup="revisar(this)" required/></p>
                    <p><input type="text" class="input" name="usuario" id="nombreUR" placeholder="Nombre de Usuario*" size="20" maxlength="20" onblur="revisar(this)" onkeyup="revisar(this)" required/></p>
                    <p><input type="password" class="input" name="clave" id="password" placeholder="Contraseña*" maxlength="50" onblur="revisar(this)" onkeyup="revisar(this)" required/></p>
                    <p><input type="password" class="input" name="confirm_clave" id="confirm_password" placeholder="Confirma tu contraseña*" size="20" maxlength="20" onblur="revisar(this)" onkeyup="revisar(this)" required/></p>
                    
                    <?php
                      include "acciones.php";
                      selectores_registro();
                    ?>  

                    </select>
                    </p>

					<p><button class="submit-btn" id="registrar" value="Registrar" onClick="validar_formulario()" type="button" >Registrar</button></p>
                    <p><a href="../index.php"><input class="regresar-btn" name="Regresar" id="regresar" type="button" value="Regresar"></a></p>
                    <p><input class="reset-btn" type="reset" name="accion" id="restablecer" value="Restablecer"></p>
				</form>       
            </div>
		</div>
	</div>
</body>
</html>