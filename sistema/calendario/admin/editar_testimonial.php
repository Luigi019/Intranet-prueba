<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
 <?php
 include "../includes/Funciones/acciones.php"; 
 include "../includes/Funciones/conectardb.php";
 	
 $id_testimonial="";
 $nombre_persona="";
 $apellido_persona="";
 $testimonial="";
 $identificador="";
 $imagen_persona="";

 
 $fila = obtener1testimonial($_GET['cod_testimonial']);
 
 $id_testimonial=$fila['id_testimonial'];
 $nombre_persona=$fila['nombre_persona'];
 $apellido_persona=$fila['apellido_persona'];
 $testimonial=$fila['testimonial'];
 $identificador=$fila['identificador'];
 $imagen_persona=$fila['imagen_persona'];

 ?>
  <div class="contenido-gestionar">
<h3>Modificar testimonial
<small>(Llena el formulario para Modificar un testimonial)</small>
</h3>
<br>
<div class="box-header">

</div>
<div class="box-body">

<article>
				<h2 align="center">Modificar testimonials</h2>
				
				<fieldset>
					<legend>
						<img src="img/editar.png" border="0" align="center">
					</legend>
                        <form action="modificar_testimonial.php" name="form1" method="get" entype="multipart/form-data">
                            
							<label>Identificador del testimonial:</label>
                            <br>
							<input name="id_testimonial" type="text" value="<?php echo $id_testimonial; ?>">
                            <br> 
                            <label>Nombre:</label>
                            <br> 
							<input type="text" name="nombre_persona" value="<?php echo $nombre_persona; ?>">
                            <br> 
                            <label>Apellido:</label>
                            <br> 
							<input name="apellido_persona" type="text" value="<?php echo $apellido_persona; ?>">
                            <br> 
                            <label>Testimonial:</label>
                            <br> 
                            <input name="testimonial" type="text" value="<?php echo $testimonial; ?>">
                              <br>
                            <label>Identificador:</label>
                            <br> 
                            <input name="identificador" type="text" value="<?php echo $identificador; ?>">
							<br>
							<label>Imagen:</label>
                            <br>
							<input name="imagen_persona" type="file" value="<?php echo $imagen_persona; ?>">
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