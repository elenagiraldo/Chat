<?php

include("conexion.php");

 $usuarioPhp = $_POST['usuario'];
 $mensajePhp = $_POST['mensaje'];
 
 	$insertar = "INSERT INTO mensajes(mensaje,usuario) VALUES('$mensajePhp','$usuarioPhp')";
	
	mysqli_query($conexion,$insertar);
?>