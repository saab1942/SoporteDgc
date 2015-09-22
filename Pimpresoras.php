<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
	<title>Registro de Impresoras</title>




</head>

<body> 
 <?php include('iPrinForm.php'); ?>




<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
<!--TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
	

	<table class="table table-striped table-hover ">

		<!--Cabecera Tabla/!-->

		<thead>
			<tr> 
				
				<th>idImpresora</th> 
				<th>Marca</th> 
				<th>Modelo</th> 
				<th>Tonner</th> 
				<th>Area</th>
				<th>Puesto</th>
				<th>Operaciones</th>
			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

			<!--Consulta a impresora con php/!-->		
		<?php 

			require('conexion.php'); //Archivo que configura la conexion
			//$cadenaQuery = "SELECT * FROM impresora"; 
			$cadenaQuery=
			"SELECT 
			i.idImpresora, i.iMarca, i.imodelo, mt.Modelo, p.pArea, p.pPuesto
			FROM
			impresora i
			INNER JOIN
			impresora_has_posicion ip ON i.idImpresora = ip.Impresora_idImpresora
			INNER JOIN
			posicion p ON ip.Posicion_idPosicion = p.idPosicion
			INNER JOIN
			modelotonner mt ON mt.idModeloTonner = i.ModeloTonner_idModeloTonner
			";

			$consulta = mysql_query($cadenaQuery);  

			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr>";

				echo "<td id='".$row["idImpresora"]."' class='imp_id'>"  	.$row["idImpresora"]. 		"</td>";			
				echo "<td id='".$row["idImpresora"]."' class='imp_orden'>"  .$row["iMarca"]. 		"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_tipo'>"  	.$row["imodelo"]. 			"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_marca'>"  .$row["Modelo"]. 			"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_modelo'>" .$row["pArea"]. 			"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_serial'>" .$row["pPuesto"]. 			"</td>";
				
				/*Si va a ultilizar modals  ocultos, se necesitara recuperar el valor de los  formularios 
				usando selectores y filtros de clases e ids mediante Jquery
				ya que no se puede usar GET por que no habra  una URL hacia otra pagina */

				//Boton que llama a modificar que abre el modal en el id del boton guardo el id de la impresora 
				// y boton que llama  a Eliminar
				echo "<td>  

				<button class='btn btn-s btn-primary' 
				data-toggle='modal' data-target='#modalcambios'
				id='".$row["idImpresora"]."'>
				<span class='glyphicon glyphicon-refresh'></span>
				</button>
				

						
				</td>";



				
				/* 
				Si va utilizar una pagina externa y pasar por url el id de cada tupla 
				para eliminar o para modficar	y recibir por el metodo GET active esta
				parte del codigo y modifique los href.
				*/

				/*
				echo "<td>  
				<a class='btn btn-s btn-warning' 
				href='pruebamodal.php?ID=".$row["idImpresora"]."'>
				<span class='glyphicon glyphicon-pencil'></span>
				</a>

				<a class='btn btn-s btn-danger' 
				href='pruebamodal.php?ID=".$row["idImpresora"]."'>
				<span class='glyphicon glyphicon-remove'></span>
				</a> 
				</td>";
				*/



			}

		?>

		</tbody>
	</table> 

<!--FIN  TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->


<!--BOTON QUE LLAMA MODAL! ALTA-->

<!--BOTON QUE LLAMA MODAL-->
	








</html> 

