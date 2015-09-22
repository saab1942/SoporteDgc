<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB">
	<meta name="description" content="Formulario de Alta de Obra">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<title></title>
</head>
<body>


<!--NAV/!-->
<?php include('navbar.php'); ?>
<!--NAV/!-->


	<div class= "panel panel-info">

	<div class="panel-heading">
    <h3 class="panel-title">Modificar Posicion</h3>
  	</div>
	
	<div class="panel-body">

		<form action='funcionmodificar.php' method='POST' name='form'>


		<!--Consulta un posicion  y carga los controles/!-->		
		<?php 
			// este id corresponde a una posicion se pasa por metodo GET
			$id = $_REQUEST['id'];		
			
			require('../Conexion/conexion.php'); //Archivo que configura la conexion
			$cadenaQuery = "SELECT * FROM Posicion where idPosicion = '$id' ";  
			$consulta = mysql_query($cadenaQuery);  
         	$row = mysql_fetch_array($consulta);

					
			echo	"<input type='text' id='idPosicion' name='idPosicion' class='form-control' required value=".$row["idPosicion"].">";


			//Aqui recupermos todas las area para Cargar el Select Option con las AREAS
			//------------------------------------------//
			$consultaArea= "SELECT * from area";
			$resultadoArea=mysql_query($consultaArea);

			echo "<label for='area'>area:</label>";
			echo "<select name='idarea' class='form-control'>";		
			
 			while($rowArea=mysql_fetch_array($resultadoArea)){
   			echo "<option value=".$rowArea["idarea"].">".$rowArea["area"]."</option>"; 
   			
 			}
 			echo "</select>";
			//------------------------------------------//
			//Falta Hacer que aqui muestre realemnte el valor que tenia seleccionado


				
			echo	"<label for='puesto'>puesto:</label>";
			echo	"<input type='text' id='puesto' name='puesto' class='form-control' required value=".$row["puesto"].">";
		
			echo	"<label for='usuario'>usuario:</label>";
			echo	"<input type='text' id='usuario' name='usuario' class='form-control' required value=".$row["usuario"].">";

			echo	"<label for='nombreRed'>nombreRed:</label>";
			echo	"<input type='text' id='nombreRed' name='nombreRed' class='form-control' required value=".$row["nombreRed"].">";

			echo	"<label for='grupoRed'>grupoRed:</label>";
			echo	"<input type='text' id='grupoRed' name='grupoRed' class='form-control' required value=".$row["grupoRed"].">";

			echo	"<label for='ip'>ip:</label>";
			echo	"<input type='text' id='ip' name='ip' class='form-control' required value=".$row["ip"].">";
		
			echo	"<label for='observaciones'>observaciones:</label>";
			echo	"<input type='text' id='observaciones' name='observaciones' class='form-control' required value=".$row["observaciones"].">";
		

			//Falta Hacer que aqui muestre realemnte el valor que tenia seleccionado
			echo 	"<label for='internet'>Internet:</label>";
			echo 	"<select name='internet' id='internet' name='internet' class='form-control' required >";
			echo	"<option value='s' >si</option>";
			echo	"<option value='n' >no</option>";
			echo    "</select>";
			//Falta Hacer que aqui muestre realemnte el valor que tenia seleccionado
			
		?>

	<div class="panel-footer">
		
			<input type="submit" id="enviar" class="btn btn-success btn-lg btn-block" >
		
			</div>

		</form>
		
	  </div>
	</div>	    















	
     
     
     
    

	
</body>
</html>