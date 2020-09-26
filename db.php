<?php

//CREDENCIALES PARA CONECTAR CON LA BASE DE DATOS,
// EN ESTE CASO LA BASE DE DATOS ES ONLINE
$servidor = "bjnvhdrh6za5y4dfxhkd-mysql.services.clever-cloud.com";
$usuario = "u73c7bobyfkiphoo";
$password = "Kb5PXLqaHX0sPzIQNKoT";
$base_datos = "bjnvhdrh6za5y4dfxhkd";


//INCIANDO
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

//DAR FORMATO A LA FECHA (TENIA ERRORES)
//funcion formato_fecha($fecha){
	//return date('g:i a', strtotime($fecha));
//}
//MENSAJE DE CONFIRMACION
print(" La conexion ha sido establecida")
//SI NO SE MUESTRA SIGNIFICA QUE HAY UN ERROR 


?>