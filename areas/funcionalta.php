<?php


require('../Conexion/conexion.php');

//Asignacion de Variables--------------------------------//
$area		 	= 	$_REQUEST['area'];
//-----------------------------------------------------//





//INSERT EN area Tonner---------------------------------------------------//
$consultaarea		= "INSERT INTO area(area)VALUES ('$area')";

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

