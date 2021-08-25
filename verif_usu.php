<?php
	include('conexion.php');
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass_usu'];

	$SqlQuery="SELECT * FROM admin WHERE email='".$usuario."' AND password='".$pass."'";
	$result=mysqli_query($link,$SqlQuery);
	$row=mysqli_fetch_array($result);
	$num_rows=mysqli_num_rows($result);

	if(!$result){
		echo "Error al ejecutar $SqlQuery ";
		exit;
	}

	if($num_rows==1){
		$email=trim($row['email']);
		$pass=trim($row['password']);
		//echo $email." ".$pass; exit;
		session_start();
		$_SESSION['admin_name']=$email;
		$_SESSION['admin_pass']=$pass;

		header("location:administradores.php");

	}else{
		header("location:index.php");
	}

?>