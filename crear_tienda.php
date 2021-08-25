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
		<input type="text" name="nombre_tienda" id="nombre_tienda" placeholder="Tienda">
		<input type="text" name="direccion" id="direccion" placeholder="Dirección">
	</form>
	<button name="btn-guardar" id="btn-guardar">Guardar</button>
	<div id="resp"></div>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script>
	    $(document).on('ready',function(){       
	        $('#btn-guardar').click(function(){
	        	var nombre_tienda = $('#nombre_tienda').val();
	        	var direccion = $('#direccion').val();
                var url = "guardar_tienda.php";
                var formData = new FormData();
                formData.append('nombre_tienda', nombre_tienda);
	            formData.append('direccion', direccion);
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