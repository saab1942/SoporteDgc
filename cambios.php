<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
	<title>Cambios de Tonner</title>
</head>



<body> 

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
<!--TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
	

	<table class="table table-striped table-hover ">

		<!--Cabecera Tabla/!-->

		<thead>
			<tr> 
				
				<th>Fecha</th> 
				<th>Contador Impresora</th> 
				<th>Contador Tonner</th> 
			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

			<!--Consulta a impresora con php/!-->		
		<?php 

			require('conexion.php'); //Archivo que configura la conexion
			$cadenaQuery = "SELECT 
    ict.fecha_cambio, ict.contador_impresora, ict.contador_tonner
FROM
    impresora i
        INNER JOIN
    impresora_cambia_tonner ict ON i.idImpresora = ict.Impresora_idImpresora
        INNER JOIN
    tonner t ON ict.tonner_idTonner = t.idTonner
WHERE
    i.idImpresora = 2 ";  
			




			$consulta = mysql_query($cadenaQuery);  

			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr>";

				echo "<td>"  .$row["fecha_cambio"]. 		"</td>";			
				echo "<td>"  .$row["contador_impresora"]. 		"</td>";			
				echo "<td>"  .$row["contador_tonner"]. 		"</td>";	


				
/*
				echo "<td id='".$row["idImpresora"]."' class='imp_id'>"  	.$row["idImpresora"]. 		"</td>";			
				echo "<td id='".$row["idImpresora"]."' class='imp_orden'>"  .$row["iOrdenNro"]. 		"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_tipo'>"  	.$row["iTipo"]. 			"</td>";
				
*/
			}

		?>

		</tbody>
	</table> 

<!--FIN  TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->


      	<form action="#" method="POST" name="form">
		
		
		<label for="marca">Marca:</label>
		<input type="text" id="marca" name="marca" class="form-control" required>
		
		
		<label for="modelo">Modelo:</label>
		<input type="text" id="modelo" name="modelo" class="form-control" required>
		
		
		<label for="serial">Serial:</label>
		<input type="text" id="serial" name="serial" class="form-control">
		
		
		<label for="estado">Estado:</label >
		<select name="estado" id="estado" name="estado" class="form-control">
			<option value="activo" selected="activo">Activo</option>
			<option value="baja">Baja</option>
			<option value="reparacion">En reparacion</option>
			<option value="ocioso">Ocioso</option>
		</select>
		
		
		<label for="orden">Nº Orden:</label>
		<input type="text" id="orden" name="orden" class="form-control">
		
		
		<label for="tipo">Tipo:</label>
		<select name="tipo" id="tipo" name="tipo" class="form-control" required>
			<option value="laser" selected="laser">Laser</option>
			<option value="ticketera">Ticketera</option>
			<option value="plotter">Plotter</option>
			<option value="tinta">Chorro de Tinta</option>
		</select>
		
		
		<label for="obs">Observaciones:<br></label> 
		<textarea name="obs" cols="40" rows="6" id="obs" class="form-control"></textarea>

     	<input type="submit" id="enviar" class="btn btn-success btn-lg btn-block" style="width=100%">
		</form>
