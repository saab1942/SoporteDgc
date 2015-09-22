<?php
require('../Conexion/conexion.php');

$id     				=	$_REQUEST['iddispositivo'];


$contimp 				= 	$_REQUEST['contimp'];
$fecha 					= 	$_REQUEST['fecha'];
$observaciones 			=	$_REQUEST['observaciones'];
$motivo 				=	$_REQUEST['motivo'];



$idtonner				=  	$_REQUEST['idtonner'];


echo $idtonner;


$linea1			= "INSERT INTO impresora_has_tonner
(contadorimpresora,fecha,observaciones,Impresora_Dispositivo_idDispositivo,Tonner_idTonner,motivo)";
$linea2 	   	= "VALUES ('$contimp','$fecha','$observaciones','$id','$idtonner','$motivo')";
$cadena	= $linea1.$linea2;






$consulta=mysql_query($cadena);

if (!$consulta)
{
	echo "<p>Ha habido un error al insertar los valores.</p>";
	echo $cadena;
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
	
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
	header('Location: gestiontonner.php');	
}



	





?>

