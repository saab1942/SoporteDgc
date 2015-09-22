<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Monitor">
	<meta name="keywords" content="Monitor, accesible, formulario">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	<title>Registro de Monitor</title>




</head>

<body> 



<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->



<div class="page-header">
  <h1>Gestion Monitor <small></small></h1>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
<!--TABLA Monitor/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
	
	<table class="table table-striped table-hover ">

		<!--Cabecera Tabla/!-->

		<thead> 

			<title>
				Listado Monitor

			</title>



			<tr> 
				<!--Campos de Dispositivo/!-->				
				<th>Id</th> 
				<th>Nro Orden</th>
				<th>Serie</th> 
				<th>Marca</th> 
				<th>Modelo</th>
				<th>Observaciones</th> 


				<!--Campos de Monitor/!-->				
				<th>Pulgadas</th>
				<th>Tipo</th>
				
				
			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

		<!--Consulta a dispositivo y generacion de tabla con php/!-->		
		<?php 


			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			$cadenaQuery = "SELECT * from dispositivo inner join monitor on dispositivo.idDispositivo=monitor.Dispositivo_idDispositivo";  
			//$cadenaQuery = "SELECT * from impresoraVW ";  

			$consulta = mysql_query($cadenaQuery);  

		
			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr>";
				//campos de dispositivo
				echo "<td> "  .$row["idDispositivo"]. 				"</td>";			
				echo "<td> "  .$row["orden"]. 						"</td>";
				echo "<td> "  .$row["serie"]. 						"</td>";
				echo "<td> "  .$row["marca"]. 						"</td>";
				echo "<td> "  .$row["modelo"]. 						"</td>";
				echo "<td> "  .$row["observaciones"]. 				"</td>";
				
				// campos de monitor	
				echo "<td> "  .$row["pulgadas"].		 				"</td>";
				echo "<td> "  .$row["tipo"].			 				"</td>";
				echo "<td> "  .$row["Dispositivo_idDispositivo"]. 	"</td>";
				
				echo "<td>  
				<a class='btn btn-s btn-warning' 
				href='modificar.php?id=".$row["idDispositivo"]."'>
				<span class='glyphicon glyphicon-pencil'></span>
				</a>

				<a class='btn btn-s btn-danger' 
				href='funcionBorrar.php?id=".$row["idDispositivo"]."'>
				<span class='glyphicon glyphicon-remove'></span>
				</a> 
				</td>";
	

			}

		?>

		</tbody>
	</table> 

<!--FIN  TABLA Monitor/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->


<a class="btn btn-s btn-success" href="alta.php"> 
Agregar Monitor
</a>









</html> 

