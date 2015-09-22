<?php


require('../Conexion/conexion.php');

//Asignacion de Variables--------------------------------//
//Variables que corresponden a dispositivo
$marca 				= 	$_REQUEST['marca'];
$modelo			 	= 	$_REQUEST['modelo'];
$serial			 	= 	$_REQUEST['serial'];
$orden				=	$_REQUEST['orden'];
$observaciones		=	$_REQUEST['observaciones'];

//Variables que corresponden a impresora
$ip 				= 	$_REQUEST['ip'];
$tipo 				= 	$_REQUEST['tipo'];
//-----------------------------------------------------//

//-----------------------------------//
$idmodelotonner 				= 	$_REQUEST['idmodelotonner'];
$idPosicion 					= 	$_REQUEST['idPosicion'];



//INSERT EN DISPOSITIVO---------------------------------------------------//
//Primero Realizo insert en la tabla Dispositivo
//Por defecto para todo dispositivo nuevo, la posicion es 1, que corresponde a deposito y estado 1 que es inactivo

$linea1			= "INSERT INTO Dispositivo(orden,serie,marca,modelo,observaciones, Posicion_idPosicion, Estado_idEstado)";
$linea2 	   	= "VALUES ('$orden','$serial','$marca','$modelo','$observaciones','$idPosicion','1')";
$consultaDispo	= $linea1.$linea2;


//Habilitar esta Cadena para prueba de errorres
echo $consultaDispo;

$resultDispo=mysql_query($consultaDispo);
if (!$resultDispo)
{
	echo "<p>Error al insertar los valores.</p>";
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
}
//--------------------------------------------------------------------------------//





//RECUPERAR ID DISPOSITIVO--------------------------------//
//Una vez que se realizo el insert de dispositivo
//Recupero el ID que tiene el ultimo dispositivo que inserte

$LastId = mysql_query("SELECT MAX(idDispositivo) AS id FROM dispositivo");
if ($row = mysql_fetch_row($LastId)) {
$idMAX = trim($row[0]);
}
//Habilitar esta Cadena para prueba de errorres
// echo $idMAX;
//-----------------------------------------------------//






//INSERT EN IMPRESORA--------------------------------------------------------------//
//El id de impresora sera el ultimo id recuperado

$consultaImp = "INSERT INTO impresora(tipo,ip,Dispositivo_idDispositivo,modelotonner_idmodelotonner) VALUES ('$tipo', '$ip','$idMAX',$idmodelotonner)";

//Habilitar esta Cadena para prueba de errorres
//echo $consultaImp;

if (!mysql_query($consultaImp))
{
	echo "<p>Ha habido un error al insertar los valores.</p>";
	echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
	header('Location: listar.php');
}
//--------------------------------------------------------------------------------//

?>

