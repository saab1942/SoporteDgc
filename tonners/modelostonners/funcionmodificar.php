<?php
require('../../Conexion/conexion.php');

$id     		=	$_REQUEST['idmodelotonner'];
$modelo 		= 	$_REQUEST['modelo'];




$cadena= 
"UPDATE 
modelotonner
SET
modeloT=			'$modelo'
WHERE 
idmodelotonner = '$id' ";


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

