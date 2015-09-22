<?php
		$conexion = mysql_connect ("localhost", "root", "")
		or die ("No se puede conectar con el servidor");
		
		$db= mysql_select_db ("soportedgc", $conexion)
		or die ("No se puede seleccionar la base de datos");
?>
