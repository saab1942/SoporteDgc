<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="css/bootstrap.min.css" rel="stylesheet">

	<title>ABM Impresoras</title>
</head>
<body>






<!--MODAL MODIFICAR-->


<!--MODAL-->
<div class="modal fade" id="modalModif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!--ENCABEZADO MODAL-->
      <div class="modal-header">
        <!--BOTON DE CERRAR-->
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4>Modificar Impresora</h4>
      </div>
      <!--FIN ENCABEZADO MODAL-->




     <!--CONTENIDO MODAL-->
     <div class="modal-body">


		<!--FORMULARIO MODIF-->
      	<form action="ifuncModificar.php" method="POST" name="form">
		
		
		<label for="marca">Marca:</label>
		<input type="text" id="modifmarca" name="marca" class="form-control" required> 
		
		
		<label for="modelo">Modelo:</label>
		<input type="text" id="modifmodelo" name="modelo" class="form-control" required>

		
		<label for="serial">Serial:</label>
		<input type="text" id="modifserial" name="serial" class="form-control" >


		<label for="estado">Estado:</label >
		<select name="estado" id="modifestado" name="estado" class="form-control">
			<option value="activo" selected="activo">Activo</option>
			<option value="baja">Baja</option>
			<option value="reparacion">En reparacion</option>
			<option value="ocioso">Ocioso</option>
		</select>
		
		
		<label for="orden">Nº Orden:</label >
		<input type="text" id="modiforden" name="orden" class="form-control">
		
		
		<label for="tipo">Tipo:</label>
		<select name="tipo" id="modiftipo" name="tipo" class="form-control" required >
			<option value="laser" >Laser</option>
			<option value="ticketera">Ticketera</option>
			<option value="plotter"  selected="plotter">Plotter</option>
			<option value="tinta">Chorro de Tinta </option>
		</select>
		
		
		<label for="obs">Observaciones:<br></label> 
		<textarea name="modifobs" cols="40" rows="6" id="obs" class="form-control">
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








<!--MODAL CAMBIOS-->


<!--MODAL-->
<div class="modal fade" id="modalcambios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!--ENCABEZADO MODAL-->
      <div class="modal-header">
        <!--BOTON DE CERRAR-->
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4>Cambios de Tonner</h4>
      </div>
      <!--FIN ENCABEZADO MODAL-->





     <!--CONTENIDO MODAL-->
     <div class="modal-body">

       <?php include('cambios.php'); ?>
		
		
   
     </div>
     <!--FIN CONTENIDO MODAL-->


     <!--PIE MODAL-->
     <div class="modal-footer">

		
     	     
    </div>
    <!--FIN PIE MODAL-->


   </div>
  </div>
</div>

<!--FIN MODAL-->






















	
</body>
</html>