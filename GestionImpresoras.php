<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="description"content="Practica de html 5" />
  <meta name="viewport"  content="width=device-width, initial-scale=1.0">
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


  <title>Gestion Impresoras </title>
</head>


<body>

 
      <!--NAV/!-->
      <?php include('navbar.php'); ?>
      <!--NAV/!-->






<!--TABS IMPRESORAS/!-->
  <ul id="myTab" class="nav nav-tabs">

      <!--ELEMENTOS  TABS IMPRESORAS/!-->  
      <!--el href identificara a cada tab/!-->              

       <li class="active">
         <a href="#TabPrincipal" data-toggle="tab"> <span class="glyphicon glyphicon-print"></span> Principal</a>
      </li>

      <li >
         <a href="#TabImpresoras" data-toggle="tab"> <span class="glyphicon glyphicon-print"></span> Impresoras</a>
      </li>
        
      <li>
         <a href="#TabTonners" data-toggle="tab"><span class="glyphicon glyphicon-tint"></span> Tonners</a>
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
    


    <div class="tab-pane fade in active" id="TabPrincipal">
      <?php include('Pimpresoras.php'); ?>     
    </div>



    <div class="tab-pane fade" id="TabImpresoras">
        <?php include('ABMimpresoras.php'); ?>
    </div>


    <div class="tab-pane fade" id="TabTonners">
        <?php include('ABMTonners.php'); ?>
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






               




<!--SCRIPT QUE RELLENA EL MODAL MODIFICAR-->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
<script>


$(document).ready(function(){

$('#modalAlta').fadeIn("slow");


$("button").click(function(){ //Cuando haga Click en algun button


  
  var idButton="#"+ $(this).attr("id"); //recupero el valor del id que esta en el boton modificar
  //alert(idButton); // Usar para saber si se esta recuperando bien el valor


  //filtro de la tabla las columnas con clase .xxxxxx y luego eligo la fila que tiene el id 
  var impMarca = $(".imp_marca").filter(idButton).text();  
  //alert(impMarca); // Usar para saber si se esta recuperando bien el valor
  //En el form que esta en el modal moficar cargo el dato
  $("#modifmarca").val(impMarca);
    
  //repito para cada elemento del form
  var impModelo = $(".imp_modelo").filter(idButton).text();  
  $("#modifmodelo").val(impModelo);


  var impSerial = $(".imp_serial").filter(idButton).text();  
  $("#modifserial").val(impSerial);


     //con esta linea se puede probar seleccion en la tabla coloreando
    //$(".ton_modelo").filter("#1").css("background-color","yellow");  
//alert(idButton);
//alert(tonmodelo);
  
//PAra modificar Tonners
  var tonmodelo = $(".ton_modelo").filter(idButton).text();  
  $("#tmodifmodelo").val(tonmodelo);
  
 var toncodigo = $(".ton_codigo").filter(idButton).text();  
  $("#tmodifcodigo").val(toncodigo);
  
    
       
  });
  
});
</script>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - /!-->
<!--FIN SCRIPT QUE RELLENA EL MODAL MODIFICAR-->


<!--> <script src="https://code.jquery.com/jquery.js"></script></!-->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

