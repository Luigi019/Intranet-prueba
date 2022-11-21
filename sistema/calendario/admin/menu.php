
<div class="contenedor-menu">
<a href="#" class="btn-menu" >Menu<i class="icono fa fa-bars"></i></a>
<ul class="menu">
<li><a href="gestionar-eventos.php"><i class="icono izquierda fa fa-home"></i>Inicio</a></li>
<li> <a href="#"><i class="fas fa-calendar-alt"></i>    Eventos</a>  
         <ul class="evento">
        <li><a href="lista-evento.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos </a></li>
        <li><a href="crear_evento.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar un evento </a></li>       
          
          </ul>
        </li>
        <li> <a href="#"><i class="fa fa-book" aria-hidden="true"></i></i>  Categoria Eventos</a>  
         <ul class="evento">
        <li><a href="lista-categoria.php" ><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos </a></li>
        <li><a href="crear_categoria.php" ><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar una categoria </a></li>       
          
          </ul>
        </li>
        <li> <a href="#" ><i class="fa fa-user" aria-hidden="true"></i></i>  Invitados</a>  
         <ul class="evento">
        <li><a href="lista-invitados.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos </a></li>
        <li><a href="crear_invitado.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar un invitado </a></li>       
          
          </ul>
        </li>
        </li>
        <li> <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></i>  Testimoniales</a>  
         <ul class="evento">
        <li><a href="lista-testimoniales.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos </a></li>
        <li><a href="crear_testimonial.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar un testimonial </a></li>       
          
          </ul>
        </li>
</ul>
</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script id="rendered-js">
$(document).ready(function () {
  $('.menu li:has(ul)').click(function (e) {
    e.preventDefault();

    if ($(this).hasClass('activado')) {
      $(this).removeClass('activado');
      $(this).children('ul').slideUp();
    } else {
      $('.menu li ul').slideUp();
      $('.menu li').removeClass('activado');
      $(this).addClass('activado');
      $(this).children('ul').slideDown();
    }
  });

  $('.btn-menu').click(function () {
    $('.contenedor-menu .menu').slideToggle();
  });

  $(window).resize(function () {
    if ($(document).width() > 450) {
      $('.contenedor-menu .menu').css({ 'display': 'block' });
    }

    if ($(document).width() < 450) {
      $('.contenedor-menu .menu').css({ 'display': 'none' });
      $('.menu li ul').slideUp();
      $('.menu li').removeClass('activado');
    }
  });

  $('.menu  a').click(function () {
    window.location.href = $(this).attr("href");
  });
});
//# sourceURL=pen.js
    </script>