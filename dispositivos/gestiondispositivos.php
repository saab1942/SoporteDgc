<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	
	<title>Cambiar Tonner</title>




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
	
	<table class="table table-striped table-hover table-bordered table-condensed  ">

		<!--Cabecera Tabla/!-->

		<thead> 
			<title> <center>
				Listado Dispositivos

			</title>

			<tr> 				
				<th>#</th> 
				<th>Orden</th> 
				<th> <a href='gestiondispositivos.php?ordenar=marca'> Marca</th> 
				<th> <a href='gestiondispositivos.php?ordenar=modelo'> Modelo</th>
				<th> <a href='gestiondispositivos.php?ordenar=area'> Area </a></th>
				<th>Puesto</th>
				<th>Operaciones</th>		
			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

		<!--Consulta a dispositivo y generacion de tabla con php/!-->		
		<?php 


			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			@$ordenar = $_REQUEST['ordenar'];


			if (isset($ordenar))
			{
					$cadenaQuery = "SELECT * from posicionDisp ORDER BY $ordenar ";  
			}
			else
			{
					$cadenaQuery = "SELECT * from posicionDisp ORDER BY modelo "; 
			}


			$consulta = mysql_query($cadenaQuery);  

			$nro = 1;
			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr>";
				echo "<td> "  .$nro. 						"</td>";
				echo "<td> "  .$row["orden"]. 				"</td>";
				echo "<td> "  .$row["marca"]. 				"</td>";
				echo "<td> "  .$row["modelo"]. 				"</td>";
				echo "<td> "  .$row["area"]. 				"</td>";
				echo "<td> "  .$row["puesto"].			    "</td>";

							
				echo "<td>  
				<a  class='btn btn-s btn-warning' 
				href='listarcambios.php?id=".$row["idDispositivo"]."'>
				<span class='glyphicon glyphicon-list-alt'></span>
				</a>

				<a class='btn btn-s btn-danger' 
				href='cambiarposicion.php?id=".$row["idDispositivo"]."'>
				<span class='glyphicon glyphicon-transfer'></span>
				</a> 
				</td>";
				echo "</tr>";

				$nro = $nro + 1;


			}

		?>

		</tbody>
	</table> 

<!--FIN  TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->




    
    







</html> 

