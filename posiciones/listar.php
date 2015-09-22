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
				Listado Posiciones

			</title>



			<tr> 
				
				<th>Id</th> 
				<th>Area</th>
				<th>Puesto</th>
				<th>usuario</th> 
				<th>Nombre de Red</th> 
				<th>Grupo de Red</th>
				<th>IP</th>
				<th>Observaciones</th>
				<th>Internet</th>

			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

		<!--Consulta a dispositivo y generacion de tabla con php/!-->		
		<?php 


			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			//$cadenaQuery = "SELECT * from dispositivo inner join impresora on dispositivo.idDispositivo=impresora.Dispositivo_idDispositivo";  
			$cadenaQuery = "SELECT * from posicion inner Join area WHERE area_idarea=idarea";  
			$consulta = mysql_query($cadenaQuery);  

			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr>";

				echo "<td> "  .$row["idPosicion"]. 		"</td>";			
				echo "<td> "  .$row["area"]. 			"</td>";
				echo "<td> "  .$row["puesto"]. 			"</td>";
				echo "<td> "  .$row["usuario"]. 		"</td>";
				echo "<td> "  .$row["nombreRed"]. 		"</td>";
				echo "<td> "  .$row["grupoRed"]. 		"</td>";
				echo "<td> "  .$row["ip"]. 				"</td>";
				echo "<td> "  .$row["observaciones"]. 	"</td>";	
				echo "<td> "  .$row["internet"].	 	"</td>";	




				echo "<td>  
				<a class='btn btn-s btn-warning' 
				href='modificar.php?id=".$row["idPosicion"]."'>
				<span class='glyphicon glyphicon-pencil'></span>
				</a>

				<a class='btn btn-s btn-danger' 
				href='funcionBorrar.php?id=".$row["idPosicion"]."'>
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
Agregar Posicion
</a>





    
    







</html> 

