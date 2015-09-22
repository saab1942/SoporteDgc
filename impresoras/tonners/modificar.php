<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../../css/bootstrap.min.css" rel="stylesheet">

	<title></title>
</head>
<body>



	<!--NAV/!-->
	<?php include('navbar.php'); ?>
	<!--NAV/!-->



	<div class= "panel panel-info">

	<div class="panel-heading">
    <h3 class="panel-title">Modificar Impresoras</h3>
  	</div>
	
	<div class="panel-body">

		<form action='funcionmodificar.php' method='POST' name='form'>


		<!--Consulta un dispositivo y carga los controles/!-->		
		<?php 

			$id = $_REQUEST['id'];		
			
			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			$cadenaQuery = "SELECT * FROM tonnerVW where idTonner = '$id' ";  
			$consulta = mysql_query($cadenaQuery);  
         	$row = mysql_fetch_array($consulta);
			
			

			
			//Esto se repite para todos los dispositivo	
			echo	"<input type='text' id='iddispositivo' name='iddispositivo' class='form-control' required value=".$row["idTonner"].">";
				
			echo	"<label for='marca'>Marca:</label>";
			echo	"<input type='text' id='marca' name='marca' class='form-control' required value=".$row["marca"].">";
		
			echo	"<label for='modelo'>Modelo:</label>";
			echo	"<input type='text' id='modelo' name='modelo' class='form-control' required value=".$row["modelo"].">";
		
			echo	"<label for='serial'>Serial:</label>";
			echo	"<input type='text' id='serial' name='serial' class='form-control' value=".$row["serie"].">";
		
			echo	"<label for='orden'>Nº Orden:</label>";
			echo	"<input type='text' id='orden' name='orden' class='form-control' value=".$row["orden"].">";		
		
			echo	"<label for='obs'>Observaciones:<br></label>" ;
			echo	"<textarea name='observaciones' cols='40' rows='6' id='observaciones' class='form-control'>".$row["observaciones"]."</textarea>";
			//Esto se repite para todos los dispositivo	
		


			//Esto es especifico de Impresora
			echo   	"<label for='tipo'>Tipo:</label>";
			echo   	"<select name='tipo' id='tipo' name='tipo' class='form-control' required >";
			echo   	"	<option value='laser'>".$row["tipo"]."</option>";
			echo   	"	<option value='laser'>laser</option>";
			echo   	"	<option value='tinta'>tinta</option>";
			echo   	"	<option value='matricial'>matricial</option>";
			echo   	"</select>";

			echo   	"<label for='ip'>IP:</label>";
			echo   	"<input type='text' id='ip' name='ip' class='form-control' value=".$row["ip"].">";
		
		?>

	<div class="panel-footer">
		
			<input type="submit" id="enviar" class="btn btn-success btn-lg btn-block" >
		
			</div>

		</form>
		
	  </div>
	</div>	    















	
     
     
     
    

	
</body>
</html>