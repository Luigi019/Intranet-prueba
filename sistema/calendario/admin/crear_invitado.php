<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
  <div class="contenido-gestionar">

<h3>Crear Invitado
<small>(Llena el formulario para crear un nuevo Invitado)</small>
</h3>
<br>
<div class="box-header">
    <h3>Crear los Invitados en esta seccion</h3>
    <br>
</div>
<div class="box-body">

<form action="guardar_invitado.php" name="registro" method="post" entype="multipart/form-data">
                    <p><input type="text" class="input" name="nombre" id="nombre" placeholder="Nombre*" maxlength="50" required/></p>
                    <p><input type="text" class="input" name="apellido" id="apellido" placeholder="Apellido*" maxlength="50" required/></p>
                    <p><input type="text" class="input" name="descripcion" id="descripcion" placeholder="Descripcion del Invitado" maxlength="50" required/></p>
                    <p><input type="file" class="input" name="imagen" id="imagen" placeholder="Fotografia del Invitado"/></p>
                

                    <table>	<tr> 
<td><p><button type="submit" class="submit-btn" id="registrar" value="Registrar type="button" >Crear Invitado</button></p></td>
                    <td><p><a href="gestionar-eventos.php"><input class="regresar-btn" name="Regresar" id="regresar" type="button" value="Regresar"></a></p></td>
                    <td><p><input class="reset-btn" type="reset" name="accion" id="restablecer" value="Restablecer"></p></td>
                    </tr>
</table>
				</form> 
 </section>


<?php Include_once 'footer.php'; ?>