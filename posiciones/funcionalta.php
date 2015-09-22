<?php
require('../Conexion/conexion.php');

// Este es id del SELECT OPTION que recibe el id del Area
$idarea	 	= 	$_REQUEST['idarea'];

// Datos de Posicion

$puesto 				= 	$_REQUEST['puesto'];
$usuario			 	= 	$_REQUEST['usuario'];
$nombreRed			 	= 	$_REQUEST['nombreRed'];
$grupoRed			 	= 	$_REQUEST['grupoRed'];
$ip			 			= 	$_REQUEST['ip'];		
$observaciones		 	= 	$_REQUEST['observaciones'];
$internet		 		= 	$_REQUEST['internet'];



//Por defecto para todo dispositivo nuevo, la posicion es 1, que corresponde a deposito y estado 1 que es inactivo
$linea1		= "INSERT INTO posicion(area_idarea,puesto,usuario,nombreRed,grupoRed,ip,observaciones,internet) ";
$linea2 	= " VALUES ('$idarea','$puesto','$usuario','$nombreRed','$grupoRed','$ip','$observaciones','$internet')";
$consulta	= $linea1.$linea2;

echo $consulta;
echo $tipo;

$result=mysql_query($consulta);

if (!$result)
{
	echo "<p>Ha habido un error al insertar los valores.</p>";
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
	header('Location: listar.php');
}








?>

