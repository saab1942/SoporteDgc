<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<title>Alta</title>
</head>


<body>

<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->

	
      
<div class="row">
	<div class="col-sm-6" style="background-color:lavender;">
		

		<div class= "panel panel-info">

			<div class="panel-heading">
    			<h3 class="panel-title">Nuevo dispositivo</h3>
  			</div>
	
		<div class="panel-body">
       	
       	<!--FORMULARIO ALTA-->
       	<!--Esta primera seccion del formulario se repite en todos los dispositivos, corresponde a la tabla dispositivo-->
	      	<form action="funcaltadisp.php" method="POST" name="form">



	      		<!--Select que recupera todas los Tipos-->	
	      		<?php
				require('../Conexion/conexion.php');
				$consultatipo= "SELECT * from tipo ";
				$resultadotipo=mysql_query($consultatipo);


				echo "<label for='tipo'>tipo:</label>";
				echo "<select name='idtipo' class='form-control'>";		
 				while($rowtipo=mysql_fetch_array($resultadotipo)){
   				echo "<option value=".$rowtipo["idtipo"].">".$rowtipo["nombretipo"]."</option>"; 
				}
				echo $consultatipo;
  				?>
				</select>
				<!--EndSELECT que recupera todas los Tipos-->	



				<!--formulario dispositivo-->
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



			

      			
				<label for="fecha">Fecha:</label>
				<input type="date" id="fecha" name="fecha" class="form-control" required value = "<?php echo date('Y-m-d'); ?>">
      			
				
				<!--Select que recupera todas los Proveedores-->
				<?php
				$consultaproveedor= "SELECT * from proveedor ";
				$resultadoproveedor=mysql_query($consultaproveedor);


				echo "<label for='proveedor'>proveedor:</label>";
				echo "<select name='idproveedor' class='form-control'>";		
 				while($rowproveedor=mysql_fetch_array($resultadoproveedor)){
   				echo "<option value=".$rowproveedor["idproveedor"].">".$rowproveedor["nombre"]."</option>"; 
				}
				?>
				</select>
				<!--ENDSelect que recupera todas los Proveedores-->


				<label for="garatiaprov">GarantiaP:</label>
				<input type="text" id="garatiaprov" name="garatiaprov" class="form-control" required>
				
				<label for="garantiafab">GarantiaF</label>
				<input type="text" id="garantiafab" name="garantiafab" class="form-control" required>

				<label for="costo">Costo</label>
				<input type="text" id="costo" name="costo" class="form-control" required>
		
		


	      		


	      		

				

		
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