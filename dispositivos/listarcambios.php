<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	<title>Movimientos</title>




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
	
	<table class="table table-striped table-hover table-bordered table-condensed ">

		<!--Cabecera Tabla/!-->

		<thead> 

			<title>
				Listado Impresoras

			</title>



			<tr> 
				
				<th>#</th> 
				<th>Fecha</th> 
				<th>Motivo</th>
				
				
			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

		<!--Consulta a dispositivo y generacion de tabla con php/!-->		
		<?php 
			
			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			
			$id = $_REQUEST['id'];	
			$nro = 1;

			$cadenaLC = "SELECT * from movimiento inner join Dispositivo on Dispositivo_idDispositivo = idDispositivo where Dispositivo_idDispositivo= '$id' order by fecha";  
		
			$consultaLC = mysql_query($cadenaLC);  
			$rowLC = mysql_fetch_array($consultaLC);
			echo "Dispositivo: ".$rowLC["marca"]." ".$rowLC["modelo"];

			
			mysql_data_seek($consultaLC,0);

			while($rowLC = mysql_fetch_array($consultaLC))
			{	

				

				echo "<tr>";
				echo "<td> "  .$nro. 							"</td>";
				echo "<td> "  .$rowLC["fecha"]. 				"</td>";
				echo "<td> "  .$rowLC["observaciones"].				"</td>";
				echo "</tr>";

				$nro = $nro + 1;


			}	
				
			

		?>

		</tbody>
	</table> 

<!--FIN  TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->



    







</html> 

