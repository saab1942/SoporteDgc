<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="stylo.css" />    
	<meta charset="UTF-8">
	<meta name="author" content="SAAB y RRP">
	<meta name="description" content="Formulario de Alta de Impresoras">
	<meta name="keywords" content="impresoras, accesible, formulario">
  	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<title>area</title>
</head>


<body>



<!--NAV/!-->
<?php include('../navbar.php'); ?>
<!--NAV/!-->

      

<div class="row">
	<div class="col-sm-6" style="background-color:lavender;">
		

		<div class= "panel panel-info">

			<div class="panel-heading">
    			<h3 class="panel-title">Agregar area</h3>
  			</div>
	

		<div class="panel-body">
       	
       	<!--FORMULARIO ALTA-->
       	  	<form action="funcionalta.php" method="POST" name="form">

				<label for="area">area:</label>
				<input type="text" id="area" name="area" class="form-control">
		
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