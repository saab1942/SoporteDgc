<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<title>Nueva posicion</title>
</head>


<body>


<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->



      

<div class="row">
<div class="col-sm-6" style="background-color:lavender;">
<div class= "panel panel-info">

	<div class="panel-heading">
    	<h3 class="panel-title">Nueva posicion </h3>
  	</div>



  	<div class="panel-body">

    
       	<!--FORMULARIO ALTA-->
      	<form action="funcionalta.php" method="POST" name="form">




      		<!--Generamos un Select que recupera todas las Areas de la tabla Area-->
			<?php
			require('../Conexion/conexion.php');
			$consultaArea= "SELECT * from area";
			$resultadoArea=mysql_query($consultaArea);


			echo "<label for='area'>area:</label>";
			echo "<select name='idarea' class='form-control'>";		
 			while($rowArea=mysql_fetch_array($resultadoArea)){
   			echo "<option value=".$rowArea["idarea"].">".$rowArea["area"]."</option>"; 
			}
			echo $consultaArea;

  			?>
			</select>
      		<!--  Fin Select de Areas -->


      		<label for="puesto">puesto:</label>
			<input type="text" id="puesto" name="puesto" class="form-control">

			<label for="usuario">usuario:</label>
			<input type="text" id="usuario" name="usuario" class="form-control">
		
			<label for="nombreRed">Nombre de Red:</label>
			<input type="text" id="nombreRed" name="nombreRed" class="form-control">
			
			<label for="grupoRed">Grupo de Red:</label>
			<input type="text" id="grupoRed" name="grupoRed" class="form-control">
			
			<label for="ip">IP:</label>
			<input type="text" id="ip" name="ip" class="form-control">

			

			<label for="observaciones">Observaciones:<br></label> 
			<textarea name="observaciones" cols="10" rows="3" id="observaciones" class="form-control"></textarea>

			
			<label for="internet">Internet:</label>
			<select name="internet" id="internet" name="internet" class="form-control" required >
				<option value="s" >si</option>
				<option value="n" selected>no</option>
			</select>

  			
		</div>

  		<div class="panel-footer">
		
			<input type="submit" id="enviar" class="btn btn-success btn-lg btn-block" style="width=100%">
			</form>
		
		</div>
				  
  </div>
</div>

</div>	    

	
</body>
</html>