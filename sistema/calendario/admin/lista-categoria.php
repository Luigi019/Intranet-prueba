<?php Include_once 'header.php'; ?>
 <section class="gestionar_datos contenedor">
 <?php Include_once 'menu.php'; ?>
 <div class="contenido-gestionar">

<h3>Listado de Categorias
    <small>(Aquí podrás editar o borrar las Categorias)</small>
</h3>
<br>
<div class="box-header">
    <h3>Maneja las Categorias en esta seccion</h3>
</div>
<div class="box-body">
    <table id="registros" class="tabla-registros" border="1">
        <br>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Identificador</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            try {
                include "../includes/Funciones/conectardb.php";
                include "../includes/Funciones/acciones.php"; 
                $calendario = obtenerCategorias();

            } catch (\Exception $e){
                echo $e->getMessage();

            }
        ?>
        <?php
        $calendarios =array();
            foreach($calendario as $datos){          ?>  
                <tr>
                <td><?php echo $datos['cat_evento']; ?></td>
                <td><?php echo $datos['id_categoria']; ?></td>
                <td>
                    <a href="editar_categoria.php?cod_categoria=<?php echo $datos['id_categoria']; ?>">
                    <img src="img/editar.png"  height="20px" alt=""></a>
                    <a href="borrar_categoria.php?cod_categoria=<?php echo $datos['id_categoria']; ?>">
                    <img src="img/borrar.png"  height="20px" alt=""></a>
                </td>
                	 </tr>

            <?php } ?>
        </tbody>

    <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Identificador</th>
                <th>Acciones</th>
            </tr>
    </tfoot>
    </table>


</div>







</div>
 </section>


<?php Include_once 'footer.php'; ?>