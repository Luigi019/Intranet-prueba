<?php Include_once 'includes/header.php'; ?>



<section class="seccion contenedor">
    <h2 align="center">Los próximos festejos en el Mes!</h2>
    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatem porro ducimus inventore sed. Quia esse asperiores iusto? Error, ea? Saepe distinctio fugiat quisquam asperiores autem. Vero aspernatur quos officiis?
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt aliquam deserunt sed exercitationem velit ab, quaerat minus. Debitis repudiandae eaque alias exercitationem earum libero molestias nesciunt veniam ut soluta? Aliquam!
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, accusantium dolores nesciunt ab vitae, doloribus maiores assumenda natus nemo, explicabo modi! Modi eos, ut totam perspiciatis soluta quas magnam necessitatibus.
 
  </p>
</section>
 
  <section class="programa">
  <div contenedor-video="">
      <video autoplay="" loop="" poster="panificacion.jpg">
        <source src="video/video.mp4" type="video/mp4">
      </video>
    </div>
    <div class="iframe-programa">
  
    <iframe name="cover" width="100%" heigth="100%" src="cumpleaños.php" scrolling="no" >
     
  </iframe> </div>
  </section>
  <section class="seccion contenedor">
  <?php Include_once 'includes/invitados.php'; ?>
</section>
<div class="contador parallax">
  <div class="contenedor">
    <div class="row">
      <ul class="resumen-evento clearfix">
          <li><p class="numero">0</p>Invitados</li>
          <li><p class="numero">0</p>Eventos</li>
          <li><p class="numero">0</p>Acontecimientos Importantes</li>
          <li><p class="numero">0</p>Fiestas Laborales</li>
      </ul>
    </div>
</div>
</div>
<section class="seccion">
  <h2 align="center">Comentarios Publicos del Personal Laboral</h2>
  <div class="testimoniales contenedor clearfix">
  <div class="testimonial">
    <blockquote>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde suscipit porro ducimus aut quasi repellat! Nostrum laborum porro accusantium quia architecto eaque iure hic fugiat voluptas quae? Voluptas, nesciunt repellat!</p>
      <footer class="info-testimonial clearfix">
        <img src="img/testimonial.jpg" alt="imagen testimonial">
        <cite>Oswaldo Aponte <span>Lic. en Administración @RRHH</span></cite>
      </footer>
    </blockquote>
  </div>
  <div class="testimonial">
    <blockquote>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde suscipit porro ducimus aut quasi repellat! Nostrum laborum porro accusantium quia architecto eaque iure hic fugiat voluptas quae? Voluptas, nesciunt repellat!</p>
      <footer class="info-testimonial clearfix">
        <img src="img/testimonial.jpg" alt="imagen testimonial">
        <cite>Oswaldo Aponte <span>Lic. en Administración @RRHH</span></cite>
      </footer>
    </blockquote>
  </div>
  <div class="testimonial">
    <blockquote>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde suscipit porro ducimus aut quasi repellat! Nostrum laborum porro accusantium quia architecto eaque iure hic fugiat voluptas quae? Voluptas, nesciunt repellat!</p>
      <footer class="info-testimonial clearfix">
        <img src="img/testimonial.jpg" alt="imagen testimonial">
        <cite>Oswaldo Aponte <span>Lic. en Administración @RRHH</span></cite>
      </footer>
    </blockquote>
  </div>
</div>
<!--//Codigo php para esta seccion
/**  ?php
            try {
                include "includes/Funciones/conectardb.php";
                include "includes/Funciones/acciones.php"; 
                $calendario = obtener_Testimoniales();

            } catch (\Exception $e){
                echo $e->getMessage();

            }
        ?>
  ?php   $calendarios =array();
   foreach($calendario as $datos){   ?>
  <div class="testimonial">
    <blockquote>
      <p>?php echo $datos['testimonial']; ?></p>
      <footer class="info-testimonial clearfix">
        <img src="img/?php echo $datos['imagen_persona']; ?>" alt="imagen testimonial">
        <cite>?php echo $datos['nombre_persona'] . " " . $datos['apellido_persona']; ?> <span>?php echo $datos['identificador']; ?></span></cite>
      </footer>
    </blockquote>
 
</div>
   ?php   } ?>--> 
</section>

<script src="js/jquery-1.12.0.min.js"></script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); 
    ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview');
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async=""></script>


  <?php
	// Guarda todo el contenido a un archivo
	$fp = fopen($archivoCache, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// Enviar al navegador
	ob_end_flush();
?>
</body></html>