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
				Listado Impresoras

			</title>



			<tr> 
				
				<th>#</th> 
				<th><a href='Gestiontonner.php?ordenar=marca'>Marca</th> 
				<th><a href='Gestiontonner.php?ordenar=modelo'>Modelo</th>
				<th><a href='Gestiontonner.php?ordenar=area'>Area</th>
				<th>Puesto</th>
				<th>Tonner</th>
				<th>Codigo</th>
				<th>Ultimo Cambio</th>
				<th>Days Ago</th>
				<th>Contador Impresora</th>
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
					$cadenaQuery = "SELECT * from cambiartonner ORDER BY $ordenar";  
			}
			else
			{
					$cadenaQuery = "SELECT * from cambiartonner ORDER BY modelo";   
			}





			
		

			$consulta = mysql_query($cadenaQuery);  

			$nro = 1;

			while($row = mysql_fetch_array($consulta))
			{
				echo "<tr>";
				echo "<td> "  .$nro. 								"</td>";

				echo "<td> "  .$row["marca"]. 						"</td>";
				echo "<td> "  .$row["modelo"]. 						"</td>";
				echo "<td> "  .$row["area"]. 						"</td>";
				echo "<td> "  .$row["puesto"].		 				"</td>";



				$iddispositivo = $row["idDispositivo"];
				//Recupero el ID que tiene el ultimo tonner que inserte en una impresora
				$LastId = mysql_query("SELECT MAX(idiht) as id FROM impresora_has_tonner where impresora_Dispositivo_idDispositivo = '$iddispositivo' ");
				if ($rowMAX = mysql_fetch_row($LastId)) {
				$idMAX = trim($rowMAX[0]);
				}
				//Habilitar esta Cadena para prueba de errorres
				
				//-----------------------------------------------------//

				



				$cadenaLC = "SELECT * from listarcambios where idiht= '$idMAX'";  
				$consultaLC = mysql_query($cadenaLC);  
				$rowLC = mysql_fetch_array($consultaLC);
				
				echo "<td> "  .$rowLC["modelot"]. 			"</td>";
				echo "<td> "  .$rowLC["codigo"]. 			"</td>";
				echo "<td> "  .$rowLC["fecha"]. 			"</td>";
				

				$today= date_create(date("Y-m-d")); 
				$dateC=date_create($rowLC["fecha"]);
				$diff=date_diff($dateC,$today);
				echo "<td> ".$diff->format("%a")."</td>"; 


				echo "<td> "  .$rowLC["contadorimpresora"]. "</td>";


				
				echo "<td>  
				<a  class='btn btn-s btn-warning' 
				href='listarcambios.php?id=".$row["idDispositivo"]."'>
				<span class='glyphicon glyphicon-list-alt'></span>
				</a>

				<a class='btn btn-s btn-danger' 
				href='cambiartonner.php?id=".$row["idDispositivo"]."'>
				<span class='glyphicon glyphicon-tint'></span>
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

