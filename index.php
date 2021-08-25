
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/login.css">
	<title>Document</title>
</head>
<body>
	<div id="content">
		<h3>Administrador</h3>
		<form action="verif_usu.php" method="post">
			<div>
				<input type="text" name="usuario" id="usuario" placeholder="Usuario" class="txt-input">
				<br>
				<input type="password" name="pass_usu" id="pass_usu" placeholder="Contraseña" class="txt-input">
				<br>
				<div class="align-div">
					<input type="submit" value="ingresar" class="margen">
				</div>
				
			</div>
		</form>
	</div>
</body>
</html>