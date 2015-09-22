<?php
require('conexion.php');


$marca = $_REQUEST['marca'];
$modelo = $_REQUEST['modelo'];
$serial = $_REQUEST['serial'];
$estado= $_REQUEST['estado'];
$orden=$_REQUEST['orden'];
$tipo = $_REQUEST['tipo'];
$obs =$_REQUEST['obs'];

echo $estado;

$linea1 = "INSERT INTO impresora(iMarca,iModelo, iSerial, iEstado, iObservaciones, iOrdenNro, iTipo) ";
$linea2 = " VALUES ('$marca','$modelo','$serial','$estado','$obs','$orden','$tipo')";
$consulta= $linea1.$linea2;

$result=mysql_query($consulta);

if (!$result)
{
	echo "<p>Ha habido un error al insertar los valores.</p>";
	
} else {
	echo "<h1>Los datos han sido introducidos satisfactoriamente</h1>";
	
}


?>

