<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<title>Otros</title>
</head>


<body>


<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->



      

<div class="row">
<div class="col-sm-6" style="background-color:lavender;">
<div class= "panel panel-info">

	<div class="panel-heading">
    	<h3 class="panel-title">Otros </h3>
  	</div>



  	<div class="panel-body">

    
       	<!--FORMULARIO ALTA-->
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





      		<!--Generamos un Select que recupera todas las Areas de la tabla tipo-->
			<?php
			require('../Conexion/conexion.php');
			$consultaTipo= "SELECT * from tipo";
			$resultadoTipo=mysql_query($consultaTipo);


			echo "<label for='nombre'>nombre:</label>";
			echo "<select name='idtipo' class='form-control'>";		
 			while($rowTipo=mysql_fetch_array($resultadoTipo)){
   			echo "<option value=".$rowTipo["idtipo"].">".$rowTipo["nombre"]."</option>"; 
			}
			echo $consultaTipo;

  			?>
			</select>
      		<!--  Fin Select de Areas -->


      	

  		<div class="panel-footer">
		
			<input type="submit" id="enviar" class="btn btn-success btn-lg btn-block" style="width=100%">
			</form>
		
		</div>
				  
  </div>
</div>

</div>	    

	
</body>
</html>