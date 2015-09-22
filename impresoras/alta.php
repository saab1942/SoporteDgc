<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<title>Agregar Impresora</title>
</head>


<body>



<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->

      

<div class="row">
	<div class="col-sm-6" >
		

		<div class= "panel panel-info">

			<div class="panel-heading">
    			<h3 class="panel-title">Agregar Impresoras</h3>
  			</div>
	

		<div class="panel-body">
       	
       	<!--FORMULARIO ALTA-->
       	<!--Esta primera seccion del formulario se repite en todos los dispositivos, corresponde a la tabla dispositivo-->
	      	<form action="funcionalta.php" method="POST" name="form">

		
				<label for="orden">Nº Orden:</label>
				<input type="text" id="orden" name="orden" class="form-control">
		
				<label for="marca">Marca:</label>
				<input type="text" id="marca" name="marca" class="form-control" required>
		
				<label for="modelo">Modelo:</label>
				<input type="text" id="modelo" name="modelo" class="form-control" required>
		
				<label for="serial">Serial:</label>
				<input type="text" id="serial" name="serial" class="form-control">
		
				<label for="observaciones">Observaciones:<br></label> 
				<textarea name="observaciones" cols="10" rows="3" id="observaciones" class="form-control"></textarea>
		<!--Aqui termina lo que corresponde al formulario dispositivo-->


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

				
		
		<!--Esta seccion corresponde a la tabla impresora que hereda de dispositivo -->		
				<label for="tipo">Tipo:</label>
					<select name="tipo" id="tipo" name="tipo" class="form-control" required>
						<option value="laser" selected>laser</option>
						<option value="tinta">tinta</option>
						<option value="matricial">matricial</option>
					</select>

				<label for="ip">IP:</label>
				<input type="text" id="ip" name="ip" class="form-control" value="0.0.0.0">
		<!--                                                                               -->		


			<!--Select que recupera todas los Modelos de Tonner-->
			<?php
			
			$consultaMT= "SELECT * from modelotonner";
			$resultadoMT=mysql_query($consultaMT);


			echo "<label for='modelotonner'>modelo de tonner:</label>";
			echo "<select name='idmodelotonner' class='form-control'>";		
 			while($rowMT=mysql_fetch_array($resultadoMT)){
   			echo "<option value=".$rowMT["idmodelotonner"].">".$rowMT["modeloT"]."</option>"; 
			}
			echo $consultaMT;

  			?>
			</select>
      		<!--  Fin Select de modelotonners -->


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