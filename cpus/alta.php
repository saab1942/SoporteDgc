<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de CPU">
	<meta name="keywords" content="CPU, accesible, formulario">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<title>Agregar CPU</title>
</head>


<body>



<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->

      

<div class="row">
	<div class="col-sm-6" style="background-color:lavender;">
		

		<div class= "panel panel-info">

			<div class="panel-heading">
    			<h3 class="panel-title">Agregar CPU</h3>
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

				
		
		<!--Esta seccion corresponde a la tabla CPU que hereda de dispositivo -->		
				
				
				<label for="tipo">Tipo:</label>
					<select name="tipo" id="tipo" name="tipo" class="form-control" required>
						<option value="desktop" selected>Desktop</option>
						<option value="notebook">Notebook</option>
						<option value="servidor">Servidor</option>
					</select>

				
		<!--                                                                               -->		

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