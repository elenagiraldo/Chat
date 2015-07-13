
$("#enviar").click(enviarMsj);
var miUsuario=prompt("Usuario");
function enviarMsj(){
	var miMensaje = $("#mensaje").val();
	$.post("php/insertar.php",{mensaje:miMensaje,usuario:miUsuario},function(datos){
			
			$("#confirmar").html("El mensaje se ha enviado correctamente");
			$("#mensaje").val("");
			})
	}//Cierra funcion enviar mensaje