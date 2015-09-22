
 <!--Navbar Principal  /!-->  
 <nav class="navbar navbar-default" role="navigation">
  <!--Contenedor /!-->  
  <div class="container-fluid">


    <!--Encabezado de la barra de navegacion con un boton oculto para responsive  /!-->
    <!--El data target debe ser el id de los elementos del navbarcolapse  /!-->
    <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#acolapsar">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"s></span>
      </button>
      <!--Fin Encabezado de la barra de navegacion con un boton oculto para responsive  /!-->


      <!--Brand de la Barra de Navegacion /!-->
      <a href="#" class="navbar-brand">SoporteDGC</a>
    </div>


    <!--Elementos de la barra de navegacion /!-->
    <!--El ID tiene el nombre del Data Target del boton navbar-toggle /!-->
    <div class="collapse navbar-collapse" id="acolapsar">

      <ul class="nav navbar-nav">


        <li><a href="./impresoras/gestiontonner.php"><span class="glyphicon glyphicon-print"></span> Impresoras</a></li>

 
 
      </ul>
      

      <!--formulario de Busqueda despues de los elementos del navbar /!-->
      <div>
        <form action="./" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar...">          
          </div>
          <button class="btn btn-default">Enviar</button>
        </form>
      </div>
      <!--Fin formulario de Busqueda despues de los elementos del navbar /!-->
    </div>
    <!-- FIn  Elementos de la barra de navegacion /!-->

  </div>   
  <!-- FIn  Container /!-->

</nav>



