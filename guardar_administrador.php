<?php
include('sesion.php');

include('conexion.php');

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$estado = $_POST['estado']; 
$fecha_now = date("Y-m-d");
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_cliente = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_cliente = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip_cliente = $_SERVER['REMOTE_ADDR'];
}

$SqlQuery="SELECT * FROM admin WHERE email='".$usuario."'";
$result=mysqli_query($link,$SqlQuery);
$num_rows = mysqli_num_rows($result);
if ($num_rows>=1) {
		echo "'YA EXITE UN ADMINISTRADOR REGISTRADO'";
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=crear_administrador.php">';
}else{
	$INSERT = "INSERT INTO admin (email, password, date_created, last_ip_used, last_modified_by, active) values ('".$usuario."','".$password."', '".$fecha_now."', '".$ip_cliente."', '".$fecha_now."', '".$estado."')";
	$result=mysqli_query($link,$INSERT);
	echo "SE REGISTRO EL PROMOTOR CON EXITO";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=crear_administrador.php">';

}
?>