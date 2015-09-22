<!DOCTYPE html/>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="description"content="Practica de html 5" />
  <meta name="viewport"  content="width=device-width, initial-scale=1.0">
  <title>SoporteDGC   </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  

  <head>

    <body>

     


      
      <!--NAV/!-->
      <?php include('navbar.php'); ?>
      <!--NAV/!-->






<!--TABS IMPRESORAS/!-->
  <ul id="myTab" class="nav nav-tabs">

      <!--ELEMENTOS  TABS IMPRESORAS/!-->  
      <!--el href identificara a cada tab/!-->              

       <li class="active">
         <a href="#Principal" data-toggle="tab"> <span class="glyphicon glyphicon-print"></span> Principal</a>
      </li>

      <li >
         <a href="#impresoras" data-toggle="tab"> <span class="glyphicon glyphicon-print"></span> Impresoras</a>
      </li>
        
      <li>
         <a href="#Computadoras" data-toggle="tab"><span class="glyphicon glyphicon-tint"></span> Tonner</a>
      </li>

      <!--este tab es desplegable/!-->              
      <li class="dropdown">
         <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Java <b class="caret"></b> </a>
         <!--elementos del  tab  desplegable/!-->              
         <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
           <li><a href="#jmeter" tabindex="-1" data-toggle="tab">jmeter</a></li>
           <li><a href="#ejb" tabindex="-1" data-toggle="tab">ejb</a></li>
         </ul>
      </li>
  </ul>

  <!--CONTENIDO PARA CADA TAB IMPRESORAS/!-->        
  <!--el tab-pane debe tener como nombre de id el mismo del href del tab que se desea/!-->              

  <div id="myTabContent" class="tab-content">
    

    <div class="tab-pane fade in active" id="principal">
        
    </div>


    <div class="tab-pane fade in active" id="impresoras">
        <?php include('ABMimpresoras.php'); ?>
    </div>

    <div class="tab-pane fade" id="Computadoras">
        asdfasdfasdf
    </div>

    <div class="tab-pane fade" id="jmeter">
        <p>jMeter is an Open Source testing software. It is 100% pure 
        Java application for load and performance testing.</p>
    </div>
    <div class="tab-pane fade" id="ejb">
        <p>Enterprise Java Beans (EJB) is a development architecture 
        for building highly scalable and robust enterprise level    
        applications to be deployed on J2EE compliant 
        Application Server such as JBOSS, Web Logic etc.</p>
    </div>
  </div>
<!--TABS IMPRESORAS/!-->





<!--> <script src="https://code.jquery.com/jquery.js"></script></!-->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

