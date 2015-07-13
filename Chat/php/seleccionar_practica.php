<?php
	include("conexion.php");
	
	$seleccionar = "SELECT * FROM correo";
	//*Seleccionar todo
	
	$confirmar = mysqli_query($conexion,$seleccionar); 
	
	while($lista = mysqli_fetch_array($confirmar)){
		
		echo $lista['asunto']."<br>";
		echo $lista['mensaje']."<br>";
		
		}
?>