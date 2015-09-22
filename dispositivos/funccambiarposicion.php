<?php
require('../Conexion/conexion.php');

$id     				=	$_REQUEST['iddispositivo'];


$fecha 					= 	$_REQUEST['fecha'];
$observaciones 			=	$_REQUEST['observaciones'];



$idPosicion				=  	$_REQUEST['idPosicion'];




$linea1			= "INSERT INTO movimiento(fecha,observaciones,Dispositivo_idDispositivo)";
$linea2 	   	= "VALUES ('$fecha','$observaciones','$id')";
$cadenamov		= $linea1.$linea2;


$consultamov=mysql_query($cadenamov);

if (!$consultamov)
{
	echo "<p>Ha habido un error al insertar los valores.</p>";
	echo $cadenamov;
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
	
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
	
}




$cadena= 
"UPDATE 
dispositivo
SET
Posicion_idPosicion = '$idPosicion'
WHERE 
idDispositivo = '$id' ";


$consulta=mysql_query($cadena);

if (!$consulta)
{
	echo "<p>Ha habido un error al insertar los valores.</p>";
	echo $cadena;
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
	
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";

	header('Location: gestiondispositivos.php');	
}



echo $cadena." ";
echo $cadenamov;

	





?>

