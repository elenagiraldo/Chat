<?php
	include("php/conexion.php")
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chat</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<script src="js/jquery.js"></script>
</head>

<body>

<div id="contenedor">
<div id="titulo"><h3>Chat Multimedia</h3></div>
<div id="leerMensaje"></div>
<div id="enviarMensaje"> <textarea cols="30" rows="10" id="mensaje" placeholder="Escribe tu mensaje"></textarea></div>
<button value="enviar" id="enviar">Enviar</button>
</div>
<script src="js/eventos.js"></script>
<script>
setInterval (llamarCorreos,100); 
 function llamarCorreos(){
	 
	 $.post("php/llamarCorreos.php",{},function(datos){
		 $("#leerMensaje").html("");
		 $.each(datos,function(llave,valor){
			 	$("#leerMensaje").append(valor.miUsuario+": "+valor.miMensaje+"<br>");
			 })//Cierro $.each
		 },"json")
	 }//Cierra funcion llamar correo

	
	
</script>
</body>
</html>