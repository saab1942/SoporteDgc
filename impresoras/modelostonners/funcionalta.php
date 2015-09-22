<?php


require('../../Conexion/conexion.php');

//Asignacion de Variables--------------------------------//
$modelo			 	= 	$_REQUEST['modelo'];
//-----------------------------------------------------//





//INSERT EN Modelo Tonner---------------------------------------------------//
$consultaMT		= "INSERT INTO modelotonner(modeloT)VALUES ('$modelo')";

$resultMT=mysql_query($consultaMT);
if (!$resultMT)
{
	echo "<p>Error al insertar los valores.</p>";
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
	header('Location: listar.php');
}
//--------------------------------------------------------------------------------//

?>

