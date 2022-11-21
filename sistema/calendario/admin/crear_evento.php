<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
  <div class="contenido-gestionar">

<h3>Crear Evento
<small>(Llena el formulario para crear un nuevo evento)</small>
</h3>
<br>
<div class="box-header">
    <h3>Crear los eventos en esta seccion <br>
    <small>Por favor si se equivoca de categoria, elimine el evento y vuelva a crearlo</small></h3>
    <br>
</div>
<div class="box-body">

<form action="guardar_evento.php" name="registro" method="post">
                    <p><input type="text" class="input" name="nombre" id="nombre" placeholder="Nombre*" maxlength="50" required/></p>
                    <p><input type="date" class="input" name="fecha" id="fecha" placeholder="Fecha*" maxlength="50" required/></p>
                    <p><input type="time" class="number" name="hora" id="hora" placeholder="Hora del Evento" maxlength="10" required/></p>
                    <p><input type="text" class="number" name="lugar" id="lugar" placeholder="Lugar del Evento" maxlength="69"/></p>
                    <?php
                      include "../includes/Funciones/acciones.php";
                      selectores_registro();
                    ?>  

                    </select>
                    </p>
<table>	<tr>
<td><p><button type="submit" class="submit-btn" id="registrar" value="Registrar type="button" >Crear evento</button></p></td>
                    <td><p><a href="gestionar-eventos.php"><input class="regresar-btn" name="Regresar" id="regresar" type="button" value="Regresar"></a></p></td>
                    <td><p><input class="reset-btn" type="reset" name="accion" id="restablecer" value="Restablecer"></p></td>
                    </tr>
</table>
				
				</form> 
 </section>


<?php Include_once 'footer.php'; ?>