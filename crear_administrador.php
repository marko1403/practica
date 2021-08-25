<?php
	include('sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/crear_administrador.php">
	<title>Document</title>
</head>
<body>
	<h3>BIENVENIDO: <?php echo $usuario;?></h3>
	<?php include('menu.php');?>


	<form action="" method="post">
		<input type="text" name="usuario" id="usuario">
		<input type="password" name="password" id="password">
		<select name="estado" id="estado">
			<option value="ACTIVO">Activo</option>
			<option value="INACTIVO">Inactivo</option>
		</select>
	</form>
	<button name="btn-guardar" id="btn-guardar">Guardar</button>
	<div id="resp"></div>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

	<script>
	    $(document).on('ready',function(){       
	        $('#btn-guardar').click(function(){
	        	var usuario = $('#usuario').val();
	        	var password = $('#password').val();
	        	var estado = $('#estado').val();

                var url = "guardar_administrador.php";
                var formData = new FormData();
                formData.append('usuario', usuario);
	            formData.append('password', password);
	            formData.append('estado', estado);
                $.ajax({                        
					type: "POST",                 
					url: url,                   
					data: formData, 
					contentType: false,
                    processData: false,  
					success: function(data)             
					{
						$('#resp').html(data);

					}
                });
	                        
	                        
	                    
            });
	    });
	</script> 
</body>
</html>