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
		<select name="marca" id="marca">
			
		</select>
		<select name="tienda" id="tienda">
			
		</select>
	</form>
	<button name="btn-guardar" id="btn-guardar">Guardar</button>
	<div id="resp"></div>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script>
	    $(document).on('ready',function(){       
	        $('#btn-guardar').click(function(){
	        	var marca = $('#marca').val();
	        	var tienda = $('#tienda').val();
	        	

                var url = "asignar_marca_tienda_guardar.php";
                var formData = new FormData();
                formData.append('marca', marca);
	            formData.append('tienda', tienda);	       
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