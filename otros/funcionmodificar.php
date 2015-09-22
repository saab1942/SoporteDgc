<?php
require('../Conexion/conexion.php');




// Este es id del SELECT OPTION que recibe el id del Area
$idtipo	 	= 	$_REQUEST['idtipo'];




$cadena= 
"UPDATE 
nombre
SET
tipo_idtipo			= 	'$idtipo',



WHERE 
idtipo 				= 	 '$idtipo' ";

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

