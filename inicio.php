 
<?php require_once('controlador/seguridad.php'); 

?> 
 <!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    
 <link rel="shortcut icon" href="imagenes/favicon.png">






      
  <title>SISMPEP│Inicio</title>




<header >

<div class="container-center"> 


<div class="container">  <!--centro todo en la pagina-->


<link rel="stylesheet" href="css/alertify.min.css" />
 
<link rel="stylesheet" href="css/default.min.css" />
 
<link rel="stylesheet" href="alertifyjs/css/alertify.css">
     <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/personalizacion.css">


  
<!--Inicio de navbar--> 

   <body  id="page-top"  data-target=".navbar-fixed-top">
<!--Inicio de navbar-->
          <nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" page-scroll href="inicio.php"><img src="imagenes/logo.png"  alt="Logo" width="100"></a>
  </div>
 



  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav" align="right" >
  
  
         <li><a class="page-scroll"  href="inicio.php">Inicio</a>



<?php








 if ( strtoupper($_SESSION["nivel"])=="ADMINISTRADOR"   ) {   ?>







  <li><a class="page-scroll"  href="configuracion.php">Gestión del sistema</a>



           




<?php


}

else {
  # code...
}






?>


 
       <li>  <a class="page-scroll"  href="controlador/salir.php">Salir</a>
       </li>
</li>
    </ul>


<!--Navbar final  -->
<!--Navbar final  -->


</header >
        
          











<body>


<div class="container">
            <div class="row">  <div class="col-sm-12 col-lg-12">
           
                 


<div class="well well-sm">
    <div class="container">
    
        <div class="row">
        <div class="col-sm-12 col-lg-12">
<div class="pull-letf">



<?php 

 if ( strtoupper($_SESSION["nivel"])=="ADMINISTRADOR"   )  {


 ?>



 


              <div class="btn-group">
              <button onClick='javascript: window.location.href="registrar.php";'  type="button"   class="btn btn-default btn-filter  btn-xs " >  <i class="fa fa-wpforms" aria-hidden="true"></i> Registrar equipo     </button>
 <?php 
   
}


 ?>

           <strong id="caracterusuario">   <i class="fa fa-check-circle"  id="colorverde" aria-hidden="true"></i>En linea:  <?php echo $_SESSION["usuarioactual"] ?>     </strong>
               <strong id="caracterusuario"> <i class="fa fa-bar-chart" aria-hidden="true"></i>  <?php include('controlador/consulta.php')     ;?>   </strong>

  <strong id="caracterusuario">  <i class="fa fa-signal" aria-hidden="true"></i> </i>  Nivel de acceso:  <?php echo   $_SESSION["nivel"]     
        ?>     </strong>

                


              </div>

</div>
   
            </div>



            
        </div>

    </div>


</div>












</div>





                </div>
            </div>
           



 
<!-- inicio de composicion de cuerpo-->
<!-- seccion servicios -->
  
        <div class="container">
            <div class="row">  <div class="col-sm-12 col-lg-12">
             <div id="imaginary_container"> 
             <form role="form" action="buscar.php" method="POST" id="busqueda" > 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control" id="busqueda" name="busqueda"  placeholder="Buscar placa o Nº Registro"  required>
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>


                           
                            </form>
                        </button>  
                    </span>
                </div>
            </div>
            </div>
              <p><br>
              </p>
              <p>&nbsp;</p>
            
              <div class="col-lg-12 text-center">
        <div class="row">       
      <div class="container" align="center">

<div class="well well-sm">
  
 <br><br>

<img src="imagenes/logo.png" alt="LOGOTIPO" >














  <hr class="featurette-divider">






<link rel="stylesheet" href="css/social-buttons.css">
  
         
  
    </div> <!-- /.row -->
</div> <!-- /.container -->





     


 



      


      <!-- FOOTER O PIE DE PAGINA -->

   
      <footer>  <center>
    

<h6>

       <text-center <p>     Sistema de supervision y mantenimiento preventivo de equipos petroleros 
   <button type="button" class="btn-link" data-toggle="collapse" data-target="#demo"> (SISMPEP)</button>  <br> 
    </div>
    <div id="demo" class="collapse">
  
        <p> 
 <h5>Desarrolado por; Analiz Molero, Yessica Nava y Jessica Acive (U.N.E.F.A) 2016 </h5>
     
      . </p> </text-center>

        </center></h6>

      </footer>
   <did class="container">
    </div><!-- /.container contenedor-->
</did>
</div</div>

<script type="text/javascript"></script>




  <!-- Custom Theme JavaScript -->

    <!-- Plugin JavaScript -->
   <script src="js/jquery.js  " ></script>
   <script src="js/bootstrap.min.js"></script>
    <script src="js/pages.js"></script>
<script src="js/personalizacion.js"></script>
<script src="js/alertify.min.js"></script>
   </div>



</div> <!--cierro el container-->


</body> 
</html> 