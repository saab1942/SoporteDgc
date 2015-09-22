<?php


require('../Conexion/conexion.php');

//Asignacion de Variables--------------------------------//


//-----------------------------------//
$idmodelotonner 	= 	$_REQUEST['idmodelotonner'];


//Variables que corresponden a dispositivo
$codigo 			= 	$_REQUEST['codigo'];
$tipo 				= 	$_REQUEST['tipo'];
$tipo 				= 	$_REQUEST['carga'];
$observaciones		=	$_REQUEST['observaciones'];


//estados
//1 - inactivo
//2 - activo
//3 - reparacion
//4 - garantia
//5 - recarga


//INSERT EN DISPOSITIVO---------------------------------------------------//
//Primero Realizo insert en la tabla Dispositivo
//Por defecto para todo dispositivo nuevo, la posicion es 1, que corresponde a deposito y estado 1 que es inactivo

$linea1			= "INSERT INTO tonner(modelotonner_idmodelotonner,codigo,tipo,observaciones,Estado_idEstado,carga)";
$linea2 	   	= "VALUES ('$idmodelotonner','$codigo','$tipo','$observaciones','1','$carga')";
$consulta	= $linea1.$linea2;


//Habilitar esta Cadena para prueba de errorres
// echo $consulta;

$result=mysql_query($consulta);
if (!$result)
{
	echo "<p>Error al insertar los valores.</p>";
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
	header('Location: listar.php');

}
//--------------------------------------------------------------------------------//







?>

