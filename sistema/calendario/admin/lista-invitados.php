<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
  <div class="contenido-gestionar">

<h3>Listado de los Invitados
    <small>(Aquí podrás editar o borrar los invitados)</small>
</h3>
<br>
<div class="box-header">
    <h3>Maneja los invitados en esta seccion</h3>
</div>
<div class="box-body">
    <table id="registros" class="tabla-registros" border="1">
        <br>
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Descripcion</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
        <?php
            try {
                include "../includes/Funciones/conectardb.php";
                include "../includes/Funciones/acciones.php"; 
                $calendario = obtenerInvitados();

            } catch (\Exception $e){
                echo $e->getMessage();

            }
        ?>
        <?php
        $calendarios =array();
        foreach($calendario as $invitados){   ?>
                <tr>
                <td><?php echo $invitados['url_imagen'];?></td>
                <td><?php echo $invitados['nombre_invitado']; ?></td>
                <td><?php echo $invitados['apellido_invitado'];?></td>
                <td><?php echo $invitados['descripcion']; ?></td>
                <td>
                    <a href="editar_invitado.php?cod_invitado=<?php echo $invitados['id_invitado']; ?>">
                    <img src="img/editar.png"  height="20px" alt=""></a>
                    <a href="borrar_invitado.php?cod_invitado=<?php echo $invitados['id_invitado']; ?>">
                    <img src="img/borrar.png"  height="20px" alt=""></a>
                </td>
                	 </tr>

            <?php } ?>
        </tbody>

    <tfoot>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
    </tfoot>
    </table>


</div>







</div>
 </section>


<?php Include_once 'footer.php'; ?>