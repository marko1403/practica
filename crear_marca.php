<?php
	include('sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/crear_marca.css">
	<title>Document</title>
</head>
<body>
	<h3>BIENVENIDO: <?php echo $usuario;?></h3>
	<?php include('menu.php');?>


	<form action="" method="post">
		<input type="text" name="nombre_marca" id="nombre_marca">
	</form>
	<button name="btn-guardar" id="btn-guardar">Guardar</button>
	<div id="resp"></div>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

	<script>
	    $(document).on('ready',function(){       
	        $('#btn-guardar').click(function(){
	        	var nombre_marca = $('#nombre_marca').val();

                var url = "guardar_marca.php";
                var formData = new FormData();
                formData.append('nombre_marca', nombre_marca);
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