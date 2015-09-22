	<!DOCTYPE html>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	<html lang="en">
	 
	<head>
		<meta charset="utf-8" />
		<title>Login Usuarios</title>
	</head>
	 
	<body>

	<!--NAV/!-->
		<?php include('navbar.php'); ?>
	<!--NAV/!-->



<div class="row" >
	<div class= "col-sm-3 col-md-offset-4"  >
		
		<div class= "panel panel-info ">

			<div class="panel-heading">
    			
    			<h3 class="panel-title">Login Usuario<span class='glyphicon glyphicon-user'>
    				
    			</span></h3>
    			
  			</div>
	

		<div class="panel-body" >
		
		<form name="form1" method="post" action="procesar.php" >
 
			<label for="username">Nombre:</label>
			<input name="username" type="text" id="username" class="form-control">
			 
			<label for="username">Password:</label>
			<input name="pass" type="password" id="pass" class="form-control">
		
		</div>



  			<div class="panel-footer">
  			<input type="submit" name="Submit" value="Entrar" class="btn btn-success btn-lg btn-block btn-sm">	 
	</form>
     
		
			</div>
				  
  		</div>
	</div>

</div>	    
	
	
	<footer>
	
	</footer>

 

	</body>
</html>






