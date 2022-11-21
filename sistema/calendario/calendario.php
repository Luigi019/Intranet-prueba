

<?php Include_once 'includes/header.php'; ?>
<section class="seccion contenedor">
<h2 align="center">Calendario</h2>
<div class="calendario clearfix">
            <?php
            try {
                include "includes/Funciones/conectardb.php";
                include "includes/Funciones/acciones.php"; 
                $calendario = obtenerDatos();

            } catch (\Exception $e){
                echo $e->getMessage();

            }
        ?>
  
        <?php
        $calendarios =array();
            foreach($calendario as $datos){          ?>  
          
               
                    <div class="dia contenedor" align="center"> 
                     <h3><i class="fas fa-calendar-alt"></i>
                         <?php echo $datos ['fecha_evento']; ?></h3>
                        <p class="titulo"> <?php echo $datos['nombre_evento']; ?> </p>
                        <p class="hora"><i class="fa fa-clock"></i> <?php echo $datos['fecha_evento'] . " " . $datos['hora_evento']; ?>	</p>
                        <p class="categoria"><?php echo $datos['cat_evento']; ?></p>
                        <p class="lugar"><?php echo $datos['lugar_evento']; ?></p>

  
                    </div>	
    </div>
            <?php } ?>
</section>


<?php Include_once 'includes/footer.php'; ?>