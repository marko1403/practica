<?php
	include('sesion.php');

	include('conexion.php');

	$nombre_tienda = $_POST['nombre_tienda'];
	$direccion = $_POST['direccion'];
	$fecha_now = date("Y-m-d");

	$SqlQuery="SELECT * FROM tiendas WHERE nombre_tienda='".$nombre_tienda."'";
	$result=mysqli_query($link,$SqlQuery);
	$row=mysqli_fetch_array($result);
	$num_rows = mysqli_num_rows($result);

	if ($num_rows>=1) {
			echo "'YA EXITE UNA TIENDA REGISTRADA'";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=crear_tienda.php">';
	}else{

		$INSERT = "INSERT INTO tiendas (nombre_tienda, creation_date, created_by, last_modified_by, adsress) values ('".$nombre_tienda."','".$fecha_now."', '".$usuario."', '".$usuario."', '".$direccion."')";
		//echo $INSERT; exit;
		$result=mysqli_query($link,$INSERT);
		echo "SE REGISTRO LA TIENDA CON EXITO";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=crear_tienda.php">';

	}
?>