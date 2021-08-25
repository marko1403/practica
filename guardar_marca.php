<?php
	include('sesion.php');

	include('conexion.php');

	$nombre_marca = $_POST['nombre_marca'];
	$fecha_now = date("Y-m-d");

	$SqlQuery="SELECT * FROM marcas WHERE nombre_marca='".$nombre_marca."'";
	//echo $SqlQuery; exit;
	$result=mysqli_query($link,$SqlQuery);
	$row=mysqli_fetch_array($result);
	$num_rows = mysqli_num_rows($result);

	if ($num_rows>=1) {
			echo "'YA EXITE UNA MARCA REGISTRADA CON EL MISMO NOMBRE'";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=crear_marca.php">';
	}else{

		$INSERT = "INSERT INTO marcas (nombre_marca, creation_date, created_by, last_modify_by) values ('".$nombre_marca."','".$fecha_now."', '".$usuario."', '".$fecha_now."')";
		//echo $INSERT; exit;
		$result=mysqli_query($link,$INSERT);
		echo "SE REGISTRO LA MARCA CON EXITO";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=crear_marca.php">';

	}
?>