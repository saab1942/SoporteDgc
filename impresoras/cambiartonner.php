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
	<div class="col-sm-6" style="background-color:lavender;">
		

		<div class= "panel panel-info">

			<div class="panel-heading">
    			<h3 class="panel-title">Cambiar Tonner</h3>
  			</div>
	

		<div class="panel-body">
       	
       	<!--FORMULARIO ALTA-->
       	<!--Esta primera seccion del formulario se repite en todos los dispositivos, corresponde a la tabla dispositivo-->
	      	<form action="funccambiartonner.php" method="POST" name="form">

	      		<?php 
	      		$iddispositivo = $_REQUEST['id'];	
	      		echo "<input type='hidden' value='$iddispositivo' name='iddispositivo' class='form-control'>";
	      		?>


	      		<label for="motivo">Motivo:</label>
					<select name="motivo" id="motivo" name="motivo" class="form-control" required>
						<option value="recarga" selected>recarga</option>
						<option value="garantia">falla</option>
					</select>




	      		<label for="fecha">Fecha:</label>
				<input type="date" id="fecha" name="fecha" class="form-control" required value = "<?php echo date('Y-m-d'); ?>">

				<label for="contimp">Contador Impresora:</label>
				<input type="text" id="contimp" name="contimp" class="form-control">
		
						
				<label for="observaciones">Observaciones:<br></label> 
				<textarea name="observaciones" cols="10" rows="3" id="observaciones" class="form-control"></textarea>
			<!--Aqui termina lo que corresponde al formulario dispositivo-->

			<!--Select que recupera todas los Modelos de Tonner-->
			<?php
			require('../Conexion/conexion.php');


			
			$consultaT= "SELECT * from tonnervw order by modeloT";
			$resultadoT=mysql_query($consultaT);


			echo "<label for='tonner'>Tonner:</label>";
			echo "<select name='idtonner' class='form-control'>";		
 			
 			while($rowT=mysql_fetch_array($resultadoT)){
   			echo "<option value=".$rowT["idTonner"].">".$rowT["modeloT"]." ".$rowT["codigo"]. "</option>"; 
			}
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