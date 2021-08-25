<?php
	session_start();
    $usuario=$_SESSION['admin_name'];
    if($usuario==""){
       header("location:index.php");
    }else{
        
    }
?>