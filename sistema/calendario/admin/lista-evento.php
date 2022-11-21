<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
  <div class="contenido-gestionar">

<h3>Listado de Eventos
    <small>(Aquí podrás editar o borrar los eventos)</small>
</h3>
<br>
<div class="box-header">
    <h3>Maneja los eventos en esta seccion</h3>
</div>
<div class="box-body">
    <table id="registros" class="tabla-registros" border="1">
        <br>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Categoria</th>
                <th>Lugar del Evento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            try {
                include "../includes/Funciones/conectardb.php";
                include "../includes/Funciones/acciones.php"; 
                $calendario = obtenerDatos();

            } catch (\Exception $e){
                echo $e->getMessage();

            }
        ?>
        <?php
        $calendarios =array();
            foreach($calendario as $datos){          ?>  
                <tr>
                <td><?php echo $datos['nombre_evento']; ?></td>
                <td><?php echo $datos['fecha_evento']; ?></td>
                <td><?php echo $datos['hora_evento']; ?></td>
                <td><?php echo $datos['cat_evento']; ?></td>
                <td><?php echo $datos['lugar_evento']; ?></td>
                <td>
                    <a href="editar_evento.php?cod_eventos=<?php echo $datos['id_evento']; ?>">
                    <img src="img/editar.png"  height="20px" alt=""></a>
                    <a href="borrar_evento.php?cod_eventos=<?php echo $datos['id_evento']; ?>">
                    <img src="img/borrar.png"  height="20px" alt=""></a>
                </td>
                	 </tr>

            <?php } ?>
        </tbody>

    <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Categoria</th>
                <th>Lugar del Evento</th>
                <th>Acciones</th>
            </tr>
    </tfoot>
    </table>


</div>







</div>
 </section>


<?php Include_once 'footer.php'; ?>