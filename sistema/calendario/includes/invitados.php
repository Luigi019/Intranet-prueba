<section class="seccion contenedor">
    <h2 align="center">Invitados</h2>
    <div class="invitados clearfix">
            <?php
            try {
                include "includes/Funciones/conectardb.php";
                include "includes/Funciones/acciones.php"; 
                $calendario = obtenerInvitados();

            } catch (\Exception $e){
                echo $e->getMessage();

            }
        ?>
           <section class="invitados contenedor seccion">

        <?php  foreach($calendario as $invitados){   ?>
   
        <ul class="lista-invitados clearfix">
          <li>
            <div class="invitado">
                <a class="invitado-info" href="#invitado <?php echo $invitados['id_invitado'];?>">
          <img src="img/<?php echo $invitados['url_imagen'];?>" alt="imagen de un invitado" >
          <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'];?> </p>
            </a>
        </div>
          </li>
          <div style="display:none;">
          <div class="invitado-info" id="invitado <?php echo $invitados['id_invitado']; ?>">
          <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']?></h2>
          <img src="img/<?php echo $invitados['url_imagen']?>" alt="imagen de un invitado" align="center">
          <p><?php echo $invitados['descripcion']; ?></p>

          </div>

          </div>
        <?php   } ?>
        </ul>
</section>



       
</section>