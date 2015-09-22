<?php
require('../Conexion/conexion.php');

$id     		=	$_REQUEST['iddispositivo'];
$marca 			= 	$_REQUEST['marca'];
$modelo 		= 	$_REQUEST['modelo'];
$serial 		= 	$_REQUEST['serial'];
$orden 			=	$_REQUEST['orden'];
$observaciones 	=	$_REQUEST['observaciones'];

$tipo			=  	$_REQUEST['tipo'];
$ip 			=  	$_REQUEST['ip'];




$cadena= 
"UPDATE 
dispositivo
SET
orden=			'$orden',
serie=			'$serial',
marca=			'$marca',
modelo=			'$modelo',
observaciones= 	'$observaciones'
WHERE 
idDispositivo = '$id' ";

echo $cadena;

$consulta=mysql_query($cadena);

if (!$consulta)
{
	echo "<p>Ha habido un error al insertar los valores.</p>";
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
	
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
	
}


$cadena2= 
"UPDATE 
impresora
SET
tipo=			'$tipo',
ip=				'$ip'
WHERE 
Dispositivo_idDispositivo = '$id' ";

echo $cadena2;

$consulta=mysql_query($cadena2);

if (!$consulta)
{
	echo "<p>Ha habido un error al insertar los valores.</p>";
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
	header('Location: listar.php');
	
}




?>

