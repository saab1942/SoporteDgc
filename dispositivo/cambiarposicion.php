<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<title>Cambiar</title>
</head>


<body>

<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->

	
      
<div class="row">
	<div class="col-sm-6" style="background-color:lavender;">
		

		<div class= "panel panel-info">

			<div class="panel-heading">
    			<h3 class="panel-title">Cambiar Posicion</h3>
  			</div>
	

		<div class="panel-body">
       	
       	<!--FORMULARIO ALTA-->
       	<!--Esta primera seccion del formulario se repite en todos los dispositivos, corresponde a la tabla dispositivo-->
	      	<form action="funccambiarposicion.php" method="POST" name="form">

	      		<?php 
	      		$iddispositivo = $_REQUEST['id'];	
	      		echo "<input type='hidden' value='$iddispositivo' name='iddispositivo' class='form-control'>";
	      		?>

	      		<label for="fecha">Fecha:</label>
				<input type="date" id="fecha" name="fecha" class="form-control" required value = "<?php echo date('Y-m-d'); ?>">


				<!--Select que recupera todas los Modelos de Tonner-->
				<?php
				require('../Conexion/conexion.php');
				$consultaPS= "SELECT * from Posicion inner join area on area_idarea=idarea ORDER BY area";
				$resultadoPS=mysql_query($consultaPS);


				echo "<label for='posicion'>Posicion:</label>";
				echo "<select name='idPosicion' class='form-control'>";		
 				while($rowPS=mysql_fetch_array($resultadoPS)){
   				echo "<option value=".$rowPS["idPosicion"].">".$rowPS["area"]."  ".$rowPS["puesto"]."</option>"; 
				}
				echo $consultaPS;

  				?>
				</select>
      			<!--  Fin Select de modelotonners -->


				<label for="observaciones">Motivo Movimiento:<br></label> 
				<textarea name="observaciones" cols="10" rows="3" id="observaciones" class="form-control"></textarea>
			<!--Aqui termina lo que corresponde al formulario dispositivo-->

		
			</div>

  			<div class="panel-footer">
		
				<input type="submit" id="Agregar" class="btn btn-success btn-lg btn-block" style="width=100%">
				</form>
		
			</div>
				  
  		</div>
		</div>

</div>	    

	
</body>
</html>