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


 <?php include('tFormulariosABM.php'); ?>


<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
<!--TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
	

	<table class="table table-striped table-hover ">

		<!--Cabecera Tabla/!-->

		<thead>
			<tr> 
				
				<th>Id</th> 
				<th>Tipo</th>
				<th>Modelo</th> 
				<th>Codigo</th> 
				<th>Observaciones</th>
				<th>Estado</th>
				<th>Estado Carga</th>
				<th>Operaciones</th>
			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

			<!--Consulta a impresora con php/!-->		
		<?php 

			require('conexion.php'); //Archivo que configura la conexion

			$cadenaQuery = "SELECT * FROM tonner inner join modelotonner on modelotonner.idModeloTonner=tonner.ModeloTonner_idModeloTonner";  
            





			//$cadenaQuery = "SELECT * FROM Tonner";  
			$consulta = mysql_query($cadenaQuery);  

			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr>";

				echo "<td id='".$row["idTonner"]."' class='ton_id'		>"  .$row["idTonner"]. 			"</td>";			
				echo "<td id='".$row["idTonner"]."' class='ton_tipo'	>"  .$row["tTipo"]. 			"</td>";
				echo "<td id='".$row["idTonner"]."' class='ton_modelo'	>"  .$row["Modelo"]. 			"</td>";
				echo "<td id='".$row["idTonner"]."' class='ton_codigo'	>"  .$row["tCodigo"]. 			"</td>";
				echo "<td id='".$row["idTonner"]."' class='ton_obs'		>" 	.$row["tObservaciones"].	"</td>";
				echo "<td id='".$row["idTonner"]."' class='ton_estado'	>"  .$row["tEstado"].  			"</td>";
				echo "<td id='".$row["idTonner"]."' class='ton_estadoc'	>" 	.$row["tEstadoCarga"].  	"</td>";
				

				/*Si va a ultilizar modals  ocultos, se necesitara recuperar el valor de los  formularios 
				usando selectores y filtros de clases e ids mediante Jquery
				ya que no se puede usar GET por que no habra  una URL hacia otra pagina */

				//Boton que llama a modificar que abre el modal en el id del boton guardo el id de la impresora 
				// y boton que llama  a Eliminar
				echo "<td>  
				<button class='btn btn-s btn-warning' 
				data-toggle='modal' data-target='#ModalTonnerModificar'
				id='".$row["idTonner"]."'>
				<span class='glyphicon glyphicon-pencil'></span>
				</button>

				
				<button class='btn btn-s btn-danger' 
				id='".$row["idTonner"]."'>
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
<button class="btn btn-info" data-toggle="modal" data-target="#ModalTonnerAlta">
	<span class="glyphicon glyphicon-plus"></span>
  AGREGAR TONNER
</button>
<!--BOTON QUE LLAMA MODAL-->
	









</html> 

