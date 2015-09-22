<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	<title>Posiciones</title>



</head>

<body> 



<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->



<div class="page-header">
  <h1> <small></small></h1>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
<!--TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
	
	<table class="table table-striped table-hover ">

		<!--Cabecera Tabla/!-->

		<thead> 

			<title>
				Listado Otros

			</title>



			<tr> 

				<th>Id</th> 
				<th>Nro Orden</th>
				<th>Serie</th> 
				<th>Marca</th> 
				<th>Modelo</th>
				<th>Observaciones</th> 
				
				
				<th>Nombre</th>
				

			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

		<!--Consulta a dispositivo y generacion de tabla con php/!-->		
		<?php 


			require('../Conexion/conexion.php'); //Archivo que configura la conexion

			$cadenaQuery = "SELECT * from dispositivo inner join otro on dispositivo.idDispositivo=otro.Dispositivo_idDispositivo";  
			//$cadenaQuery = "SELECT * from impresoraVW ";  

			$consulta = mysql_query($cadenaQuery);  

		
			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr class='info'>";

				echo "<td> "  .$row["idDispositivo"]. 				"</td>";			
				echo "<td> "  .$row["orden"]. 						"</td>";
				echo "<td> "  .$row["serie"]. 						"</td>";
				echo "<td> "  .$row["marca"]. 						"</td>";
				echo "<td> "  .$row["modelo"]. 						"</td>";
				echo "<td> "  .$row["observaciones"]. 				"</td>";
				


			//$cadenaQuery = "SELECT * from dispositivo inner join impresora on dispositivo.idDispositivo=impresora.Dispositivo_idDispositivo";  
			$tipo_idtipo = $row["tipo_idtipo"];
			$cadenatipo = "SELECT * from tipo WHERE idtipo='$tipo_idtipo'";  
			$consultatipo = mysql_query($cadenatipo);  
			$rowtipo = mysql_fetch_array($consultatipo);
			
				echo "<td> "  .$rowtipo["idtipo"]. 		"</td>";			
				echo "<td> "  .$rowtipo["nombre"]. 		"</td>";
				


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

<!--FIN  TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->

<a class="btn btn-s btn-info" href="alta.php"> 
Agregar Otro
</a>


</html> 