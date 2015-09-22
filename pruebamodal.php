

<?php
 $IdImp=$_GET['ID'];
echo $IdImp;

require('conexion.php'); //Archivo que configura la conexion
			
			$cadenaQuery = "SELECT * FROM impresora WHERE idImpresora= $IdImp";  
			$consulta = mysql_query($cadenaQuery);  

			if($row = mysql_fetch_array($consulta))
				echo "ok";
			else
				echo "puto";
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

  <meta name="description"content="Practica de html 5" />
  <meta name="viewport"  content="width=device-width, initial-scale=1.0">
  <title>SoporteDGC   </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  

  <title>Modificar Usuario </title>
</head>
<body>


        <h4>Modificar Impresora</h4>

		<!--FORMULARIO MODIF-->
      	<form action="ifuncModificar.php" method="POST" name="form">
		
		
		<input type="hidden" id="idimp" name="idimp" class="form-control" value=
		" <?php  echo $row['idImpresora'];?>">



		<label for="marca">Marca:</label>
		<input type="text" id="marca" name="marca" class="form-control" required value=
		" <?php  echo $row['iMarca'];?>">
		
		<label for="modelo">Modelo:</label>
		<input type="text" id="modelo" name="modelo" class="form-control" required value=
		"<?php  echo $row['iModelo'];?>">

		
		<label for="serial">Serial:</label>
		<input type="text" id="serial" name="serial" class="form-control" value=
		"<?php  echo $row['iSerial'];?>">


		<label for="estado">Estado:</label >
		<select name="estado" id="estado" name="estado" class="form-control">
			<option value="activo" selected="activo">Activo</option>
			<option value="baja">Baja</option>
			<option value="reparacion">En reparacion</option>
			<option value="ocioso">Ocioso</option>
		</select>
		
		
		<label for="orden">Nº Orden:</label >
		<input type="text" id="orden" name="orden" class="form-control" value=
		"<?php echo $row['iOrdenNro'];?>">
		
		
		<label for="tipo">Tipo:</label>
		<select name="tipo" id="tipo" name="tipo" class="form-control" required >
			<option value="laser" >Laser</option>
			<option value="ticketera">Ticketera</option>
			<option value="plotter"  selected="plotter">Plotter</option>
			<option value="tinta">Chorro de Tinta </option>
		</select>
		
		
		<label for="obs">Observaciones:<br></label> 
		<textarea name="obs" cols="40" rows="6" id="obs" class="form-control">
		<?php  echo $row['iObservaciones'];?>
		</textarea>
		
		<!--FORMULARIO MODIF CORTE-->
		
		
   
     </div>
     <!--FIN CONTENIDO MODAL-->




     <!--PIE MODAL-->
     <div class="modal-footer">

		<!--FORMULARIO MODIF CORTE -->
     	<input type="submit" id="enviar" class="btn btn-success btn-lg" style="width=100%">
		</form>
		<!--FIN  FORMULARIO MODIF-->	



     
    </div>
    <!--FIN PIE MODAL-->


   </div>
  </div>
</div>

<!--FIN MODAL-->

	


	<script src="js/bootstrap.min.js"></script>
</body>
</html>

