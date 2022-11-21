<?php

	include "../conectardb.php"; 
	include "../acciones.php"; 
	valida_usuario();
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Intranet</title>
  <link rel="shortcut icon" href="../img/favicon.ico" >
  <link rel="icon" type="image/gif" href="../img/animated_favicon1.gif" >
  <?php include "includes/scripts.php" ?>
</head>
<body>
  <!-- header -->
	<?php include "includes/header.php"; ?>
  <div class="wrapper">
    <div class="content">
      <br><br><br><br>
      <h2><b>Bienvenido <?php echo $_SESSION['nombre'];?> <?php echo $_SESSION['apellido'];?>.</b></h2>
    </div>
  </div>
<!-- footer 
<?php include "includes/footer.php"  ?> -->
</div>
</div>
</body>
</html>