<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB">
	<meta name="description" content="Formulario de Alta de Obra">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<title></title>
</head>
<body>


<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->


	<div class= "panel panel-info">

	<div class="panel-heading">
    <h3 class="panel-title">Modificar Otro</h3>
  	</div>
	
	<div class="panel-body">

		<form action='funcionmodificar.php' method='POST' name='form'>



		<!--Consulta un posicion  y carga los controles/!-->		
		<?php 
			$id = $_REQUEST['id'];		
			
			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			$cadenaQuery = "SELECT * FROM dispositivo inner join otro  on dispositivo.idDispositivo=otro.Dispositivo_idDispositivo where idDispositivo = '$id' ";  
			$consulta = mysql_query($cadenaQuery);  
         	$row = mysql_fetch_array($consulta);
			
			

			
			//Esto se repite para todos los dispositivo	
			echo	"<input type='text' id='iddispositivo' name='iddispositivo' class='form-control' required value=".$row["idDispositivo"].">";
				
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
		

			$tipo_idtipo = $row["tipo_idtipo"];
			$cadenatipo = "SELECT * FROM tipo where idtipo = '$tipo_idtipo' ";  
			$consultatipo = mysql_query($cadenatipo);  
         	//$rowtipo = mysql_fetch_array($consultatipo);

					
			

			//Aqui recupermos todas las area para Cargar el Select Option con los Tipos
			//------------------------------------------//
			
			echo "<label for='nombre'>nombre:</label>";
			
			echo "<select name='idtipo' class='form-control'>";
			echo "<option value=".$rowtipo["idtipo"].">".$rowtipo["nombre"]."</option>"; 		
			while($rowtipo=mysql_fetch_array($resultadotipo)){
   			echo "<option value=".$rowtipo["idtipo"].">".$rowtipo["nombre"]."</option>"; 
   			}
 			echo "</select>";
			//------------------------------------------//
			//Falta Hacer que aqui muestre realemnte el valor que tenia seleccionado

			
		?>


	<div class="panel-footer">
		
			<input type="submit" id="enviar" class="btn btn-success btn-lg btn-block" >
		
			</div>

		</form>
		
	  </div>
	</div>	    















	
     
     
     
    

	
</body>
</html>