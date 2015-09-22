<?php
require('../Conexion/conexion.php');




// Este es id del SELECT OPTION que recibe el id del Area
$idarea	 	= 	$_REQUEST['idarea'];

// Datos de Posicion
$idPosicion				=	$_REQUEST['idPosicion'];
$puesto 				= 	$_REQUEST['puesto'];
$usuario			 	= 	$_REQUEST['usuario'];
$nombreRed			 	= 	$_REQUEST['nombreRed'];
$grupoRed			 	= 	$_REQUEST['grupoRed'];
$ip			 			= 	$_REQUEST['ip'];		
$observaciones		 	= 	$_REQUEST['observaciones'];
$internet		 		= 	$_REQUEST['internet'];



$cadena= 
"UPDATE 
posicion
SET
area_idarea				= 	'$idarea',

puesto					=	'$puesto',
usuario					=	'$usuario',
nombreRed				=	'$nombreRed',
grupoRed				=	'$grupoRed',
ip						=	'$ip',
observaciones			=	'$observaciones',
internet				=	'$internet'

WHERE 
idPosicion 				= 	 '$idPosicion' ";

echo $cadena;

$consulta=mysql_query($cadena);

if (!$consulta)
{
	echo "<p>Ha habido un error al insertar los valores.</p>";
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
	
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
	header('Location: listar.php');
	
}



	





?>

