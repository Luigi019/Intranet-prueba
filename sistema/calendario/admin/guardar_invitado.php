<?php
	include "../includes/Funciones/conectardb.php"; 
	include "../includes/Funciones/acciones.php"; 
	$mensaje = guardar_invitado();

	if ($mensaje == "Invitado creado correctamente."){
		$pagina = "gestionar-eventos.php";
	}else{
		$pagina = "gestionar-eventos.php";
    }	
?>
<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
  <div class="contenido-gestionar">
  <div class="panel-heading"><br><br><br>
          <h3 class="panel-title">Registro Exitoso</h3>
        </div>
        <div class="panel-body"><br>
          <div class="alert alert-warning" role="alert"><?php echo $mensaje; ?>
            <a href="<?php echo $pagina; ?>" class="btn btn-warning" color="red"><img src="img/aceptar.jpg" border="0">
            </a>
          </div>  
  </div>
 </section>


<?php Include_once 'footer.php'; ?>