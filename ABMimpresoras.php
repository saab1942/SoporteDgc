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


 <?php include('iFormulariosABM.php'); ?>


<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
<!--TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
	

	<table class="table table-striped table-hover ">

		<!--Cabecera Tabla/!-->

		<thead>
			<tr> 
				
				<th>Id</th> 
				<th>Nro Orden</th>
				<th>Tipo</th>
				<th>Marca</th> 
				<th>Modelo</th> 
				<th>Serial</th> 
				<th>Observaciones</th>
				<th>Estado</th>
				<th>Operaciones</th>
			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

			<!--Consulta a impresora con php/!-->		
		<?php 

			require('conexion.php'); //Archivo que configura la conexion
			$cadenaQuery = "SELECT * FROM impresora";  
			$consulta = mysql_query($cadenaQuery);  

			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr>";

				echo "<td id='".$row["idImpresora"]."' class='imp_id'>"  	.$row["idImpresora"]. 		"</td>";			
				echo "<td id='".$row["idImpresora"]."' class='imp_orden'>"  .$row["iOrdenNro"]. 		"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_tipo'>"  	.$row["iTipo"]. 			"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_marca'>"  .$row["iMarca"]. 			"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_modelo'>" .$row["iModelo"]. 			"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_serial'>" .$row["iSerial"]. 			"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_obs'>"  	.$row["iObservaciones"].  	"</td>";
				echo "<td id='".$row["idImpresora"]."' class='imp_estado'>" .$row["iEstado"].  			"</td>";
				

				/*Si va a ultilizar modals  ocultos, se necesitara recuperar el valor de los  formularios 
				usando selectores y filtros de clases e ids mediante Jquery
				ya que no se puede usar GET por que no habra  una URL hacia otra pagina */

				//Boton que llama a modificar que abre el modal en el id del boton guardo el id de la impresora 
				// y boton que llama  a Eliminar
				echo "<td>  

				

				<button class='btn btn-s btn-warning' 
				data-toggle='modal' data-target='#modalModif'
				id='".$row["idImpresora"]."'>
				<span class='glyphicon glyphicon-pencil'></span>
				</button>

				
				<button class='btn btn-s btn-danger' 
				id='".$row["idImpresora"]."'>
				<span class='glyphicon glyphicon-remove'></span>
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
<button class="btn btn-success" data-toggle="modal" data-target="#modalAlta">
	<span class="glyphicon glyphicon-plus"></span>
  AGREGAR IMPRESORA
</button>
<!--BOTON QUE LLAMA MODAL-->
	








</html> 

