<?php
    include "conectardb.php"; 
    include "acciones.php";
    
    $idusuario="";
    $nombre="";
    $apellido="";
    $cedula="";
    $tlf="";
    $correo="";
    $usuario="";
    $clave="";
    $confirm_clave="";
    $idempleado = "";
    $empleado   = "";
    $idoficina = "";
    $oficina   = "";
    $idsexo = "";
    $sexo   = "";
    $idacceso = "";
    $acceso   = "";
    $idnac = "";
    $estado_nac   = "";
    
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

    if ($idsexo == 1) {
        $opcion = '<option value="'.$idsexo.'" select>'.$sexo.'</option>';
      }else if ($idsexo == 2) {
        $opcion = '<option value="'.$idsexo.'" select>'.$sexo.'</option>';
    }
    if ($idnac == 1) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 2) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 3) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 4) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 5) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 6) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 7) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 8) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 9) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 10) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 11) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 12) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 13) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 14) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 15) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 16) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 17) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 18) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 19) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 20) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 21) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 22) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 23) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }else if ($idnac == 24) {
        $opcion2 = '<option value="'.$idnac.'" select>'.$estado_nac.'</option>';
      }


      if ($idacceso == 1) {
        $opcion3 = '<option value="'.$idacceso.'" select>'.$acceso.'</option>';
      }else if ($idacceso == 2) {
        $opcion3 = '<option value="'.$idacceso.'" select>'.$acceso.'</option>';
      }else if ($idacceso == 3) {
        $opcion3 = '<option value="'.$idacceso.'" select>'.$acceso.'</option>';
      }else if ($idacceso == 4) {
        $opcion3 = '<option value="'.$idacceso.'" select>'.$acceso.'</option>';
      }


      if ($idoficina == 1) {
        $opcion4 = '<option value="'.$idoficina.'" select>'.$oficina.'</option>';
      }else if ($idoficina == 2) {
        $opcion4 = '<option value="'.$idoficina.'" select>'.$oficina.'</option>';
      }else if ($idoficina == 3) {
        $opcion4 = '<option value="'.$idoficina.'" select>'.$oficina.'</option>';
      }else if ($idoficina == 4) {
        $opcion4 = '<option value="'.$idoficina.'" select>'.$oficina.'</option>';
      }else if ($idoficina == 5) {
        $opcion4 = '<option value="'.$idoficina.'" select>'.$oficina.'</option>';
      }else if ($idoficina == 6) {
        $opcion4 = '<option value="'.$idoficina.'" select>'.$oficina.'</option>';
      }

      if ($idempleado == 1) {
        $opcion5 = '<option value="'.$idempleado.'" select>'.$empleado.'</option>';
      }else if ($idempleado == 2) {
        $opcion5= '<option value="'.$idempleado.'" select>'.$empleado.'</option>';
      }else if ($idempleado == 3) {
        $opcion5 = '<option value="'.$idempleado.'" select>'.$empleado.'</option>';
      }

    
    //echo "<pre>";
    //print_r($articulos[$_GET['id_usuario']]['idusuario']);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Usuario</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" >
    <link rel="icon" type="image/gif" href="../../img/animated_favicon1.gif" >
  <script language="javascript">
    function validar_formulario(){      
      if(document.form1.nombre.value=='' 
      || document.form1.apellido.value=='' 
      || document.form1.cedula.value=='' 
      || document.form1.tlf.value==''
      || document.form1.correo.value=='' 
      || document.form1.usuario.value==''
      || document.form1.clave.value==''
      || document.form1.confirm_clave.value==''
      || document.form1.estado_nac.value==''
      || document.form1.acceso.value==''
      || document.form1.sexo.value==''
      || document.form1.tipo_empleado.value==''){   
        alert("Todos los campos son obligatorios");     
      } else {        
        document.form1.submit();
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
        <h2>Edición de usuario.</h2>
        <p> Bienvenido al módulo de modificación, por favor complete este formulario con la información que requiera.</p>
        <div class="contenedor-form" align="center" >
            <div class="mensaje"><?php echo isset($mensaje) ? $mensaje : ''; ?></div>

                <form action="gracias_editar.php" name="form1" method="post" class="well">
                    <p><input type="hidden" class="input" name="idusuario" id="idusuario" placeholder="idusuario*" maxlength="50" onblur="revisar(this)" onkeyup="revisar(this)" onKeyDown="return sololetras(event)" value="<?php echo $idusuario; ?>" required/></p>
                    <p><input type="text" class="input" name="nombre" id="nombre" placeholder="Nombre*" maxlength="50" onblur="revisar(this)" onkeyup="revisar(this)" onKeyDown="return sololetras(event)" value="<?php echo $nombre; ?>" required/></p>
                    <p><input type="text" class="input" name="apellido" id="apellido" placeholder="Apellido*" maxlength="50" onblur="revisar(this)" onkeyup="revisar(this)" onKeyDown="return sololetras(event)" value="<?php echo $apellido; ?>" required/></p>
                    <p><input type="text" class="number" name="cedula" id="cedula" placeholder="Cédula de identidad*" maxlength="10" onblur="revisar(this)" onkeyup="revisar(this)" onKeyPress="return soloNumeros(event)" value="<?php echo $cedula; ?>" required/></p>
                    <p><input type="text" class="number" name="tlf" id="tlf" placeholder="TLF ej. 0414-123.45.67*" maxlength="14" onblur="revisar(this)" onkeyup="revisar(this)" onKeyPress="return soloNumeros(event)" value="<?php echo $tlf; ?>" required/></p>
                    <p><input type="email" class="input" name="correo" id="email" maxlength="50" placeholder="Correo electrónico*" onblur="revisar(this)" onkeyup="revisar(this)" value="<?php echo $correo; ?>" required/></p>
                    <p><input type="text" class="input" name="usuario" id="nombreUR" placeholder="Nombre de Usuario*" size="20" maxlength="20" onblur="revisar(this)" onkeyup="revisar(this)" value="<?php echo $usuario; ?>" required/></p>
                    <p><input type="password" class="input" name="clave" id="password" placeholder="Contraseña*" maxlength="50" onblur="revisar(this)" onkeyup="revisar(this)" required/></p>
                    <p><input type="password" class="input" name="confirm_clave" id="confirm_password" placeholder="Confirma tu contraseña*" size="20" maxlength="20" onblur="revisar(this)" onkeyup="revisar(this)" required/></p>
                    

                    <p class="input_sexo" id="sexo" align="left">Sexo
                      <?php include "conectardb.php"; 
                        $query_sexo = pg_query($db,"SELECT * FROM sexo ORDER BY idsexo ASC");
                        $result_sexo = pg_num_rows($query_sexo);
                      ?>
                      <select class="select_sexo" name="sexo" >            
                      <?php 
                        echo $opcion;
                        if ($result_sexo > 0) {
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
              <?php include "conectardb.php"; 
                $query_estado = pg_query($db,"SELECT * FROM estado_nac ORDER BY idnac ASC");
                $result_estado = pg_num_rows($query_estado);
              ?>
              <select class="select_estado" name="estado_nac" >
              <?php
              if ($result_estado > 0) {
              echo $opcion2;
                  while ($estado_nac = pg_fetch_array($query_estado)) { 
              ?>
              <option value="<?php echo $estado_nac["idnac"]; ?>"><?php echo $estado_nac["estado_nac"]; ?></option>
              <?php
                  }
                }
              ?>
            </select>
              </p>
          <p class="tipo_empleado" id="tipo_empleadoR" align="left">Tipo de Empleado
          <?php include "conectardb.php"; 
            $query_empleado = pg_query($db,"SELECT * FROM tipo_empleado ORDER BY idempleado ASC");
            $result_empleado = pg_num_rows($query_empleado);
          ?>
          <select class="select_empleado" name="tipo_empleado" >        
          <?php
            if ($result_empleado > 0) {
            echo $opcion5;
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
          <?php include "conectardb.php"; 
            $query_acceso = pg_query($db,"SELECT * FROM acceso ORDER BY idacceso ASC");
            $result_acceso = pg_num_rows($query_acceso);
          ?>
        <select class="select_usuario" name="acceso" >        
        <?php
          if ($result_acceso > 0) {
          echo $opcion3; 
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
          <?php include "conectardb.php"; 
            $query_oficina = pg_query($db,"SELECT * FROM oficina ORDER BY idoficina ASC");
            $result_oficina = pg_num_rows($query_oficina);
          ?>
      <select class="select_oficina" name="oficina" >    
        <?php
            if ($result_oficina > 0) 
            echo $opcion4;
                    {
            while ($oficina = pg_fetch_array($query_oficina)) {
        ?>
        <option value="<?php echo $oficina["idoficina"]; ?>"><?php echo $oficina["oficina"] ?></option>
        <?php 
            }
          }
                    ?> 
          </select></p>

                    <p><button class="submit-btn" id="registrar" value="Registrar" onClick="validar_formulario()" type="button" >Registrar</button></p>
                    <p><a href="gestionar_usuarios.php"><input class="regresar-btn" name="Regresar" id="regresar" type="button" value="Regresar"></a></p>
                    <p><input class="reset-btn" type="reset" name="accion" id="restablecer" value="Restablecer"></p>
                </form>       
            </div>
        </div>
    </div>
</body>
</html>