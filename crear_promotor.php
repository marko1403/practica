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
	<?php include('menu.php');?>
	<form action="" method="post">
		<input type="text" name="nombre" id="nombre" placeholder="nombre">
		<input type="text" name="apellido" id="apellido" placeholder="apellido">
		<input type="text" name="email" id="email" placeholder="email">
		<input type="password" name="pass" id="pass" placeholder="password">
	</form>
	<button name="btn-guardar" id="btn-guardar">Guardar</button>
	<div id="resp"></div>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script>
	    $(document).on('ready',function(){       
	        $('#btn-guardar').click(function(){
	        	var nombre = $('#nombre').val();
	        	var apellido = $('#apellido').val();
	        	var email = $('#email').val();
	        	var pass = $('#pass').val();

                var url = "guardar_promotor.php";
                var formData = new FormData();
                formData.append('nombre', nombre);
	            formData.append('apellido', apellido);
	            formData.append('email', email);
	            formData.append('pass', pass);
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