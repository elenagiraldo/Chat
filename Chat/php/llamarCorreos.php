<?php
include("conexion.php");

$seleccionar = "SELECT * FROM mensajes";

$confirmar = mysqli_query($conexion,$seleccionar);

$misCorreos = array();

while($lista = mysqli_fetch_array($confirmar)){
	$array = array('miUsuario'=>$lista['usuario'],'miMensaje'=>$lista['mensaje']);//Un array que almacena en variables cada uno de mis mensajes y asuntos
	/*echo " Asunto:".$lista['asunto']." Mensaje:".$lista['mensaje'];*/
	
	$misCorreos[]=$array;
	}//Cierra while
	echo json_encode($misCorreos);
?>