<?php
	function Conectarse()
					{
                        if (!($link=mysqli_connect("localhost","admin","admin2021")))
						{
        				echo "Error conectando a la base de datos.";
        				exit();
    					}
	  					if (!mysqli_select_db($link,"practica"))
						{
       					echo "Error seleccionando la base de datos.";
        				exit();
    					}

					return $link;
    				}
					$link=Conectarse();

?>