<?php
	include('sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Document</title>
</head>
<body>
	<h3>BIENVENIDO: <?php echo $usuario;?></h3>
	<div class="content">
		<?php include('menu.php');?>
	</div>
	
	
</body>
</html>