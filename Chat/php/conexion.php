<?php
	$conexion = mysqli_connect("localhost","root","","chat");
	if($conexion){
		//echo "Conexion exitosa";
		}else{
			echo "No se ha conectado correctamente";
			}
?>