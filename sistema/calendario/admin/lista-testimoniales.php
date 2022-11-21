<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
 <div class="contenido-gestionar">

<h3>Listado de Testimoniales
    <small>(Aquí podrás editar o borrar los Testimoniales)</small>
</h3>
<br>
<div class="box-header">
    <h3>Maneja los Testimoniales en esta seccion</h3>
</div>
<div class="box-body">
    <table id="registros" class="tabla-registros" border="1">
        <br>
        <thead>
            <tr>
                <th>Nombre Persona</th>
                <th>Apellido</th>
                <th>Identificador</th>
                <th>Testimonial</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            try {
                include "../includes/Funciones/conectardb.php";
                include "../includes/Funciones/acciones.php"; 
                $calendario = obtener_Testimoniales();

            } catch (\Exception $e){
                echo $e->getMessage();

            }
        ?>
        <?php
        $calendarios =array();
            foreach($calendario as $datos){          ?>  
                <tr>
                <td><?php echo $datos['nombre_persona']; ?></td>
                <td><?php echo $datos['apellido_persona']; ?></td>
                <td><?php echo $datos['identificador']; ?></td>
                <td><?php echo $datos['testimonial']; ?></td>
                <td><?php echo $datos['imagen_persona']; ?></td>
                <td>
                    <a href="editar_testimonial.php?cod_testimonial=<?php echo $datos['id_testimonial']; ?>">
                    <img src="img/editar.png"  height="20px" alt=""></a>
                    <a href="borrar_testimonial.php?cod_testimonial=<?php echo $datos['id_testimonial']; ?>">
                    <img src="img/borrar.png"  height="20px" alt=""></a>
                </td>
                	 </tr>

            <?php } ?>
        </tbody>

    <tfoot>
            <tr>
                <th>Nombre Persona</th>
                <th>Apellido</th>
                <th>Identificador</th>
                <th>Testimonial</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
    </tfoot>
    </table>


</div>







</div>
 </section>


<?php Include_once 'footer.php'; ?>