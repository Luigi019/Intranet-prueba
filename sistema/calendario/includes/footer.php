
 

  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery-1.12.0.min.js"></script>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/lightbox.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview');
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