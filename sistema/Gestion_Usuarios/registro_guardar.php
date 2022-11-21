<?php
	include "conectardb.php"; 
	include "acciones.php"; 
	$mensaje = guardar_registro();

	if ($mensaje == "Usuario creado correctamente."){
		$pagina = "gestionar_usuarios.php";
	}else{
		$pagina = "form-reg.php";
	}	
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Registro Guardar || Intranet</title>
  <link rel="stylesheet" href="../css/style.css">
  <script type="text/javascript" src="../../js/functions.js"></script>
  <link rel="shortcut icon" href="../img/favicon.ico" >
  <link rel="icon" type="image/gif" href="../../img/animated_favicon1.gif" >
  <script src="js/ie-emulation-modes-warning.js"></script>
</head>
<body role="document">
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
<?php include "../includes/menu.php" ?>
<center>
    <div class="container theme-showcase" role="main">
      <div class="row">
        <div class="panel-heading"><br><br><br>
          <h3 class="panel-title">Registro</h3>
        </div>
        <div class="panel-body"><br>
          <div class="alert alert-warning" role="alert"><?php echo $mensaje; ?>
            <a href="<?php echo $pagina; ?>" class="btn btn-warning" >Aceptar
            </a>
          </div>  
        </div>
      </div>
    </div>
  </body>
</html>



