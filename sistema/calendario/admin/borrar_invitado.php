<?php
	include "../includes/Funciones/conectardb.php"; 
	include "../includes/Funciones/acciones.php"; 
	eliminarInvitados();
?>
<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
  <div class="contenido-gestionar">
  <div class="content">
      	<h2 align="center">Resultado de la operación</h2>
			<h3>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;Invitado eliminado con éxito.	
			</h3><br>	
			<a href="gestionar-eventos.php">
				<img src="img/aceptar.jpg" border="0">
			</a>				
	</div>
  </div>
 </section>


<?php Include_once 'footer.php'; ?>