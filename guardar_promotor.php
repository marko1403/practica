<?php
	include('sesion.php');

	include('conexion.php');

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email']; 
	$password = $_POST['pass']; 
	$fecha_now = date("Y-m-d");

	$SqlQuery="SELECT * FROM promotores WHERE email='".$email."'";
	$result=mysqli_query($link,$SqlQuery);
	$row=mysqli_fetch_array($result);
	$num_rows = mysqli_num_rows($result);

	if ($num_rows>=1) {
			echo "'YA EXITE UN PROMOTOR REGISTRADO'";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=crear_promotor.php">';
	}else{

		$INSERT = "INSERT INTO promotores (nombre, apellido, email, password, date_created) values ('".$nombre."','".$apellido."', '".$email."', '".$password."', '".$fecha_now."')";
		$result=mysqli_query($link,$INSERT);
		echo "SE REGISTRO EL PROMOTOR CON EXITO";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=crear_promotor.php">';

	}
?>