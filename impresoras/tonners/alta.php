<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Tonners">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../../css/bootstrap.min.css" rel="stylesheet">

	<title>Agregar Tonner</title>
</head>


<body>



<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->

      

<div class="row">
	<div class="col-sm-6" style="background-color:lavender;">
		

		<div class= "panel panel-info">

			<div class="panel-heading">
    			<h3 class="panel-title">Agregar Tonners</h3>
  			</div>
	

		<div class="panel-body">
       	
       	<!--FORMULARIO ALTA-->
       	<!--Esta primera seccion del formulario se repite en todos los dispositivos, corresponde a la tabla dispositivo-->
	      	<form action="funcionalta.php" method="POST" name="form">


	      		<!--Select que recupera todas los Modelos de Tonner-->
	      		<?php
				require('../../Conexion/conexion.php');
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


		
				<label for="orden">Codigo:</label>
				<input type="text" id="codigo" name="codigo" class="form-control">
		
				<label for="tipo">Tipo:</label>
					<select name="tipo" id="tipo" name="tipo" class="form-control" required>
						<option value="alternativo">alternativo</option>
						<option value="original" selected >original</option>
				</select>


				<label for="carga">Carga:</label>
					<select name="carga" id="carga" name="carga" class="form-control" required>
						<option value="cargado" selected>cargado</option>
						<option value="vacio">vacio</option>
				</select>


					
				<label for="observaciones">Observaciones:<br></label> 
				<textarea name="observaciones" cols="10" rows="3" id="observaciones" class="form-control"></textarea>
		
				
			

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