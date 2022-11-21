<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
 <?php
 include "../includes/Funciones/acciones.php"; 
 include "../includes/Funciones/conectardb.php";
 	
 $id_categoria="";
 $cat_evento="";

 
 $fila = obtener1categoria($_GET['cod_categoria']);
 
 $id_evento=$fila['id_categoria'];
 $cat_evento=$fila['cat_evento'];


 ?>
  <div class="contenido-gestionar">

<h3>Modificar categorias
<small>(Llena el formulario para modificar las categorias)</small>
</h3>
<br>
<div class="box-header">
    <h3>Modificar las categorias en esta seccion</h3>
    <br>
</div>
<div class="box-body">

<div class="box-body">

<article>
				<h2 align="center">Modificar categorias</h2>
				
				<fieldset>
					<legend>
						<img src="img/editar.png" border="0" align="center">
					</legend>
                        <form action="modificar_categoria.php" name="form1" method="get">
                            
							<label>Identificador de la categoria:</label>
                            <br>
							<input name="id_categoria" type="text" value="<?php echo $id_categoria; ?>">
                            <br> 
                            <label>Nombre de la categoria:</label>
                            <br> 
							<input type="text" name="cat_evento" value="<?php echo $cat_evento; ?>">
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