<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
 <?php
 include "../includes/Funciones/acciones.php"; 
 include "../includes/Funciones/conectardb.php";
 	
 $id_invitado="";
 $nombre_invitado="";
 $apellido_invitado="";
 $descripcion="";
 $url_imagen="";

 
 $fila = obtener1invitado($_GET['cod_invitado']);
 
 $id_invitado=$fila['id_invitado'];
 $nombre_invitado=$fila['nombre_invitado'];
 $apellido_invitado=$fila['apellido_invitado'];
 $descripcion=$fila['descripcion'];
 $url_imagen=$fila['url_imagen'];

 ?>
  <div class="contenido-gestionar">
<h3>Modificar Invitado
<small>(Llena el formulario para Modificar un invitado)</small>
</h3>
<br>
<div class="box-header">

</div>
<div class="box-body">

<article>
				<h2 align="center">Modificar Invitados</h2>
				
				<fieldset>
					<legend>
						<img src="img/editar.png" border="0" align="center">
					</legend>
                        <form action="modificar_invitado.php" name="form1" method="get" entype="multipart/form-data">
                            
							<label>Identificador del Invitado:</label>
                            <br>
							<input name="id_invitado" type="text" value="<?php echo $id_invitado; ?>">
                            <br> 
                            <label>Nombre del Invitado:</label>
                            <br> 
							<input type="text" name="nombre_invitado" value="<?php echo $nombre_invitado; ?>">
                            <br> 
                            <label>Apellido del Invitado:</label>
                            <br> 
							<input name="apellido_invitado" type="text" value="<?php echo $apellido_invitado; ?>">
                            <br> 
                            <label>Descripcion del Invitado:</label>
                            <br> 
                            <input name="descripcion" type="text" value="<?php echo $descripcion; ?>">
							<br>
							<label>Imagen:</label>
                            <br>
							<input name="url_imagen" type="file" value="<?php echo $url_imagen; ?>">
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