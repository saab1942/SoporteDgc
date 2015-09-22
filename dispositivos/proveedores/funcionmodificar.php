<?php
require('../../Conexion/conexion.php');

$id     		=	$_REQUEST['idtipo'];
$nombre 		= 	$_REQUEST['nombre'];




$cadena= 
"UPDATE 
tipo
SET
nombre=			'$nombre'
WHERE 
idtipo = '$id' ";


// Cadena para pruebas
//echo $cadena;

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

