<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	<title>Registro de Tonners</title>




</head>

<body> 



<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->



<div class="page-header">
  <h1>Gestion Tonners <small></small></h1>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
<!--TABLA Tonners/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
	
	<table class="table table-striped table-hover ">

		<!--Cabecera Tabla/!-->

		<thead> 

			<title>
				Listado Tonners

			</title>



			<tr> 
				
				<th>Id</th> 
				<th>modelo</th>
				<th>codigo</th> 
				<th>tipo</th> 
				<th>carga</th> 
				<th>Observaciones</th> 

				
			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

		<!--Consulta a dispositivo y generacion de tabla con php/!-->		
		<?php 


			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			$cadenaQuery = "SELECT * from tonner inner join modelotonner on idmodelotonner = modelotonner_idmodelotonner ";  
			

			$consulta = mysql_query($cadenaQuery);  

		
			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr>";
				echo "<td> "  .$row["idTonner"]. 					"</td>";			
				echo "<td> "  .$row["modeloT"]. 					"</td>";
				echo "<td> "  .$row["codigo"]. 						"</td>";
				echo "<td> "  .$row["tipo"]. 						"</td>";
				echo "<td> "  .$row["carga"]. 						"</td>";
				echo "<td> "  .$row["observaciones"]. 				"</td>";
				echo "<td>  
				

				<a class='btn btn-s btn-danger' 
				href='funcionBorrar.php?id=".$row["idTonner"]."'>
				<span class='glyphicon glyphicon-remove'></span>
				</a> 
				</td>";


			}

		?>

		</tbody>
	</table> 

<!--FIN  TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->


<a class="btn btn-s btn-success" href="alta.php"> 
Agregar Tonner
</a>

<a class="btn btn-s btn-success" href="modelostonners/listar.php"> 
Modelos de Tonner
</a>


</html> 

