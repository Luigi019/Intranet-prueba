<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
 <?php
 include "../includes/Funciones/acciones.php"; 
 include "../includes/Funciones/conectardb.php";
 	
 $id_eventos="";
 $nombre="";
 $fecha="";
 $lugar="";
 $hora="";
 $categoria="";
 
 $fila = obtener1evento($_GET['cod_eventos']);
 
 $id_evento=$fila['id_evento'];
 $nombre=$fila['nombre_evento'];
 $fecha=$fila['fecha_evento'];
 $lugar=$fila['lugar_evento'];
 $hora=$fila['hora_evento'];
 $categoria=$fila['id_cat_evento']

 ?>
  <div class="contenido-gestionar">
<h3>Modificar Evento
<small>(Llena el formulario para Modificar un evento)</small>
</h3>
<br>
<div class="box-header">

</div>
<div class="box-body">

<article>
				<h2 align="center">Modificar Eventos</h2>
				
				<fieldset>
					<legend>
						<img src="img/editar.png" border="0" align="center">
					</legend>
                        <form action="modificar_evento.php" name="form1" method="get">
                            
							<label>Identificador del Evento:</label>
                            <br>
							<input name="id_evento" type="text" value="<?php echo $id_evento; ?>">
                            <br> 
                            <label>Nombre del evento:</label>
                            <br> 
							<input type="text" name="nombre" value="<?php echo $nombre; ?>">
                            <br> 
                            <label>Fecha:</label>
                            <br> 
							<input name="fecha" type="date" value="<?php echo $fecha; ?>">
                            <br> 
                            <label>Hora:</label>
                            <br> 
                            <input name="hora" type="time" value="<?php echo $hora; ?>">
							<br>
							<label>Lugar del Evento:</label>
                            <br>
							<input name="lugar" type="text" value="<?php echo $lugar; ?>">
                            <br>
                            
							<table>
                                <tr>
                                    <td align="center" width="250">
                                       <input type="submit" value="Aceptar">
                                    </td>
                                    <td align="center" width="250">
                                       <input type="reset" value="Borrar">
                                    </td>
                                </tr>	
                            </table>							
                    </form>       						
				</fieldset>
 </section>


<?php Include_once 'footer.php'; ?>