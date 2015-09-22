<?php
require('../Conexion/conexion.php');


//En la modificacion hace falta el ID para saber cual modificar
$id     		=	$_REQUEST['iddispositivo'];
//En la modificacion hace falta el ID para saber cual modificar

// Variables que corresponden a Dispositivo
$marca 			= 	$_REQUEST['marca'];
$modelo 		= 	$_REQUEST['modelo'];
$serial 		= 	$_REQUEST['serial'];
$orden 			=	$_REQUEST['orden'];
$observaciones 	=	$_REQUEST['observaciones'];

// Variables que corresponden a Impresora

$pulgadas 		=  	$_REQUEST['pulgadas'];
$tipo			=  	$_REQUEST['tipo'];



//El id de Dispositivo e Monitor deberan ser el mismo



// Primero se debe updatear DISPOSITIVO
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


// Segundo  se debe updatear Monitor 
$cadena2= 
"UPDATE 
Monitor
SET
pulgadas=			'$pulgadas',
tipo=				'$tipo'
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

