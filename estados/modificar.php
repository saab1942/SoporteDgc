<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<title></title>
</head>
<body>



	<!--NAV/!-->
	<?php include('../navbar.php'); ?>
	<!--NAV/!-->



	<div class= "panel panel-info">

	<div class="panel-heading">
    <h3 class="panel-title">Modificar Estado</h3>
  	</div>
	
	<div class="panel-body">

		<form action='funcionmodificar.php' method='POST' name='form'>


		<!--Consulta un dispositivo y carga los controles/!-->		
		<?php 

			$id = $_REQUEST['id'];		
			
			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			$cadenaQuery = "SELECT * FROM Estado where idEstado = '$id' ";  
			$consulta = mysql_query($cadenaQuery);  
         	$row = mysql_fetch_array($consulta);
			
			

			echo	"<input type='text' id='idEstado' name='idEstado' class='form-control' required value=".$row["idEstado"].">";
				
			echo	"<label for='Estado'>Estado:</label>";
			echo	"<input type='text' id='Estado' name='Estado' class='form-control' required value=".$row["Estado"].">";
		
		?>

		<div class="panel-footer">
		
			<input type="submit" id="enviar" class="btn btn-success btn-lg btn-block" >
		
			</div>

		</form>
		
	  </div>
	</div>	    





    

	
</body>
</html>