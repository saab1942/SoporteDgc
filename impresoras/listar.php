<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	<title>Registro de Impresoras</title>




</head>

<body> 



<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->



<div class="page-header">
  <h1>Gestion Impresoras <small></small></h1>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
<!--TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
	
	<table class="table table-striped table-hover ">

		<!--Cabecera Tabla/!-->

		<thead> 

			<title>
				Listado Impresoras

			</title>



			<tr> 
				
				<th>Id</th> 
				<th>Nro Orden</th>
				<th>Serie</th> 
				<th>Marca</th> 
				<th>Modelo</th>
				<th>Observaciones</th> 
				<th>Tipo</th>
				<th>ip</th>
				<th>tonnermodelo</th>
			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

		<!--Consulta a dispositivo y generacion de tabla con php/!-->		
		<?php 


			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			$cadenaQuery = "SELECT * from dispositivo inner join impresora on dispositivo.idDispositivo=impresora.Dispositivo_idDispositivo ORDER BY modelo ";  
			//$cadenaQuery = "SELECT * from impresoraVW ";  

			$consulta = mysql_query($cadenaQuery);  

		
			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr>";

				echo "<td> "  .$row["idDispositivo"]. 				"</td>";			
				echo "<td> "  .$row["orden"]. 						"</td>";
				echo "<td> "  .$row["serie"]. 						"</td>";
				echo "<td> "  .$row["marca"]. 						"</td>";
				echo "<td> "  .$row["modelo"]. 						"</td>";
				echo "<td> "  .$row["observaciones"]. 				"</td>";
				echo "<td> "  .$row["tipo"].		 				"</td>";
				echo "<td> "  .$row["ip"].			 				"</td>";

				$modelotonner_idmodelotonner = $row["modelotonner_idmodelotonner"];


				$cadenaMT = "SELECT * from modelotonner where idmodelotonner = '$modelotonner_idmodelotonner'";  
				$consultaMT = mysql_query($cadenaMT);  
				$rowMT = mysql_fetch_array($consultaMT);


				echo "<td> "  .$rowMT["modeloT"]. 				"</td>";
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

<!--FIN  TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->


<a class="btn btn-s btn-success" href="alta.php"> 
Agregar Impresora
</a>



    
    







</html> 

