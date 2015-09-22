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
	
	<table class="table table-striped table-hover table-bordered table-condensed ">

		<!--Cabecera Tabla/!-->

		<thead> 

			<title>
				Listado Impresoras

			</title>



			<tr> 
				
				<th>#</th> 
				<th>Fecha</th> 
				<th>Dias</th> 
				<th>Motivo</th>
				<th>Contador</th>
				<th>Impresiones</th>
				<th>Modelo</th>
				<th>Codigo</th>

				
			</tr> 
		</thead>

		<!--Cuerpo de tabla/!-->
		<tbody>

		<!--Consulta a dispositivo y generacion de tabla con php/!-->		
		<?php 
			$id = $_REQUEST['id'];	

			$nro =  1;
			$contadoractual = 0;
			$contadoranterior = 0;
			$impresiones = 0;
			$sumaimpresiones = 0;
			$PromedioMensual = 0;
			$diff =  date_create(date("Y-m-d")); 

			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			
			$cadenaLC = "SELECT * from listarcambios where idDispositivo= '$id' order by fecha";  
		
			$consultaLC = mysql_query($cadenaLC);  
			$rowLC = mysql_fetch_array($consultaLC);
			echo "Impresora: ".$rowLC["marca"]." ".$rowLC["modelo"];

			

			mysql_data_seek($consultaLC,0);

			while($rowLC = mysql_fetch_array($consultaLC))
			{	

				if ($nro==1)
				{
					$contadoranterior = $rowLC["contadorimpresora"];
					$fechaanterior= date_create($rowLC["fecha"]); 

				}
				else
				{
					$contadoractual = $rowLC["contadorimpresora"];

					$impresiones = $contadoractual - $contadoranterior;

					$fechaactual=date_create($rowLC["fecha"]);
					$diff=date_diff($fechaactual,$fechaanterior);

				}	
				

				
				

				









				echo "<tr>";
				echo "<td> "  .$nro. 							"</td>";
				echo "<td> "  .$diff->format("%a").				"</td>"; 
				echo "<td> "  .$rowLC["fecha"]. 				"</td>";
				echo "<td> "  .$rowLC["motivo"].				"</td>";
				echo "<td> "  .$rowLC["contadorimpresora"]. 	"</td>";
				echo "<td> "  .$impresiones.					"</td>";
				echo "<td> "  .$rowLC["modelot"].				"</td>";
				echo "<td> "  .$rowLC["codigo"].				"</td>";
				
				
				//solo suma si el motivo es recarga
				if ($rowLC["motivo"] == "recarga")
				{
				$sumaimpresiones = $sumaimpresiones + $impresiones;
				echo  "<td>".$sumaimpresiones."</td>";

				}


				echo "</tr>";

				$fechaanterior= date_create($rowLC["fecha"]); 
				$contadoranterior = $rowLC["contadorimpresora"];
				$nro = $nro + 1;


			}	
				$PromedioMensual = $sumaimpresiones/($nro-2);
				echo "El promedio de impresiones es de ".$PromedioMensual;


			

		?>

		</tbody>
	</table> 

<!--FIN  TABLA IMPRESORAS/!-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->



    







</html> 

