<?php


require('../../Conexion/conexion.php');

//Asignacion de Variables--------------------------------//
$nombre		 	= 	$_REQUEST['nombre'];
//-----------------------------------------------------//





//INSERT EN area tipo---------------------------------------------------//
$consultaarea		= "INSERT INTO tipo(nombretipo)VALUES ('$nombre')";

$result=mysql_query($consultaarea);
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

