<?php
	include "db.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title>chat_programacion_php</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani&display=swap" rel="stylesheet">
	<meta name="viewport" content="width-device-width, user-scalable=no, initial-scale1.0, maximun-scale1.0, minimum-scale1.0">
<!-- METODO AJAX PARA REFRESCAR CADA VEZ QUE SE GUARDE UN MENSAJE -->
	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}
				req.open('GET', 'chat.php', true);
				req.send();
	}
		//LINEA QUE REFRESCA  LA PAGINA CADA SEGUNDO
		setInterval(function(){ajax();},1000);
	</script>
<!-- FIN AJAX -->
</head>
<body onLoad="ajax();">
	<div id="contenedor">
		<div id="caja_chat">

			<div id="chat"></div>
		</div>

		<form method="POST" action="index.php">
			<input type="text" name="nombre" placeholder="ingresa tu nombre">
			<textarea name="mensaje" placeholder="ingresa tu mensaje"></textarea>
			<input type="submit" name="enviar" value="Enviar">
		</form>
		<form method="POST" action="index.php" id="Bvaciar"  > 
		<input type="submit" name="vaciar" value="Vaciar">

		<!--SELECT password FROM `Logins` WHERE nombre = "Elian"; -->

		</form>



		<!-- ACCION PARA AGREGAR DATOS A LA BD CON POST -->
		<?php
		if (isset($_POST['enviar'] )) {
			$nombre = $_POST['nombre']; 
			$mensaje = $_POST['mensaje']; 

			$consulta = "INSERT INTO chat (nombre,mensaje) VALUES ('$nombre', '$mensaje')";
			$ejecutar = $conexion->query($consulta);

			//PROPIEDADES DEL TONO
			if ($ejecutar) {
				echo "<embed loop='false' src='src/nuevo_mensaje.mp3' hidden='true' autoplay='true'>";
			}


		}
		?>

		<?php
		if (isset($_POST['vaciar'] )) {
			$nombre = $_POST['nombre']; 
			
			$consulta = "TRUNCATE `bjnvhdrh6za5y4dfxhkd`.`chat`";
			$ejecutar = $conexion->query($consulta);

	
		}
		?>

	</div>

</body>
</html>