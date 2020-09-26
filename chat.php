<?php
//MISMO CODIGO DEL INDEX PARA CONSULTAR Y MOSTRAR PERO INSTANCIADO
	include "db.php";
	$consulta = "SELECT * FROM chat ORDER BY id ASC";
	$ejecutar = $conexion->query($consulta);
	while($fila = $ejecutar->fetch_array()):
	?>
		<div id="datos_chat">
		<span style="color: #1c62c4;"><?php echo $fila['nombre']; ?>: </span>
			<span style="color: #80725F;"><?php echo $fila['mensaje']; ?></span>
			<span style="float:right;" style="color:#80725F;|"><?php echo $fila['fecha']; ?></span>
				</div>
<?php endwhile; ?>
			