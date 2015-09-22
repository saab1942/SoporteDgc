<?php


require('../Conexion/conexion.php');

//Asignacion de Variables--------------------------------//
$Estado		 	= 	$_REQUEST['Estado'];
//-----------------------------------------------------//





//INSERT EN Estado Tonner---------------------------------------------------//
$consultaEstado		= "INSERT INTO estado(Estado)VALUES ('$Estado')";

$result=mysql_query($consultaEstado);
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

