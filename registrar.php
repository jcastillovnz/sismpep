
<?php require_once('controlador/seguridad.php'); 

    

 if ( strtoupper($_SESSION["nivel"])=="ANALISTA"   ) {

 echo'<script type="text/javascript">
            alert("No tiene permiso para acceder a esta ubicacion solicite permiso al administrador");
      window.location="inicio.php"; 

         </script>';




} else {
 
}





?> 



 <!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    
 <link rel="shortcut icon" href="Imagenes/favicon.png">







      
      
  <title>SISMPEP│Registrar</title>




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
    <a class="navbar-brand" page-scroll href="inicio.php"><img src="Imagenes/logo.png"  alt="Logo" width="100"></a>
  </div>
 



  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav" align="right" >
  
  
         <li><a class="page-scroll"  href="inicio.php">Inicio</a>
             <li><a class="page-scroll"  href="configuracion.php">Gestión del sistema</a>
 
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
              <div class="btn-group">
                <button onClick='javascript: window.location.href="registrar.php";'  type="button"   class="btn btn-default btn-filter  btn-xs " >  <i class="fa fa-wpforms" aria-hidden="true"></i> Registrar equipo     </button>

              
           <strong id="caracterusuario">   <i class="fa fa-check-circle"  id="colorverde" aria-hidden="true"></i>En linea:  <?php echo $_SESSION["usuarioactual"] ?>     </strong>
               <strong id="caracterusuario"> <i class="fa fa-bar-chart" aria-hidden="true"></i>  <?php include('controlador/consulta.php')     ;?>   </strong>
  <strong id="caracterusuario">  <i class="fa fa-signal" aria-hidden="true"></i> </i>  Nivel de acceso:  <?php echo   $_SESSION["nivel"]    ?>     </strong>


               
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
      <div class="container" align="right">

<div class="well well-sm">
  
       <form name="registro"  method="post" action="registrar_plan.php"  >

  <p  class="panel" align="left"> <i class="fa fa-truck" aria-hidden="true"></i> Registro de equipo  </p>  
<div class="table-responsive"> 
  <table class="table table-bordered">
      <thead>
          <tr class="success">
          <th>Registro Nº:</th>
              <th>Placa</th>
              <th>Modelo</th>
              <th>Marca</th>
              <th>Color</th>
    
             
        
              
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>   <input type="text" class="form-control" value=""  name="" id="" placeholder="" required readonly="" /></td>
              <td><input type="text" class="form-control"  name="placa" id="placa" placeholder="placa" required /></td>
              <td><div class="form-group">
                           
                            <select  id="modelo" name="modelo" class="form-control" >
                                <option value="" required selected="">Elija una opcion:</option>
                           
                      <option value="Camion Cheyenne">Camion Cheyenne</option> 
                      <option value="Ambulancia c3500">Ambulancia c3500</option> 
                      <option value="Ambulancia van">Ambulancia van</option> 
                      <option value="Camion, fvr">Camion, fvr  </option> 
                      <option value="Camión chuto">Camión chuto</option> 
                              <option value="Camion, cargo chuto">Camion, cargo chuto</option> 
                               <option value="Camion
Plataforma fvr
">Camion-plat fvr
</option> 
                                <option value="Camión tritón">Camión tritón</option> 
                              
                              <option value="Mototrailla 631-C"> Mototrailla 631-C</option> 

<option value="Volqueta ban-vol-1c"> Volqueta ban-vol-1c</option> 
<option value="Mini patrol mg 747"> Mini patrol mg 747</option> 
<option value="Tampo sp 400"> Tampo sp 400</option> 
<option value=" Retro-ex 580 m ">Retro-ex 580 m </option> 
<option value="retro-ex 410 g">retro-ex 410 g</option> 



                      <option value="Otras modelos">Otros modelos</option> 
             
        
                               
                            </select>
                        </div>
</td>
              <td><div class="form-group">
                           
                            <select  id="marca" name="marca" class="form-control" >
                                <option value="" required selected="">Elija una opcion:</option>
                           
                      <option value="Ford">Ford</option> 
                      <option value="Chevrolet">Chevrolet</option> 
                      <option value="Fiat">Fiat</option> 
                      <option value="Renault">Renault</option> 
                              <option value="Honda">Honda</option> 
                              <option value="Mitsubishi-motors"> Mitsubishi-motors</option> <option value="Miller">Miller</option> 
                                <option value="Toyota"> Toyota</option> 
                                <option value="Volvo"> Volvo</option> 
                                     <option value="Mack"> Mack</option> 
                                      <option value="Caterpillar"> Caterpillar</option> 
                                        <option value="Jonh Deere"> Jonh Deere</option> 


                      <option value="Otras marcas">Otras marcas</option> 
             
        
                               
                            </select>
                        </div>
               <td><div class="form-group">
                           
                            <select  id="color" name="color" class="form-control" >
                                <option value="" required selected="">Elija un color:</option>
                           
                      <option value="Blanco">Blanco</option> 
                      <option value="Negro">Negro</option> 
                      <option value="Gris">Gris</option> 
                      <option value="Rojo">Rojo</option> 
                              <option value="Amarillo">Amarillo</option> 
                              <option value="Azul"> Azul</option> 
                                    <option value="Marron">Marron</option> 
                              <option value="Verde"> Verde</option> 
                                    <option value="Otros">Otros colores</option> 
                         
             
        
                               
                            </select>
                        </div></td>
    
          </tr>
      <tr class="success">
          
              <th>Fecha de adquisicion</th>
              <th>Propietario</th>
              <th>Fecha retiro de activos</th>
              <th>Nº de polizas</th>
              <th>Fecha de vencimiento</th>
     
          </tr>
              <tr>
              <td>   <input type="date" class="form-control" value=""  name="fechaa" id="fechaa" placeholder="Fecha adquisicion"  /></td>
              <td><input type="text" class="form-control"  name="propietario" id="propietario" placeholder="Propietario" /></td>
              <td><input type="date" class="form-control"  name="fechar" id="fechar" placeholder="Fecha retiro de activos"  /></td>
              <td><input type="text" class="form-control"  name="poliza" id="poliza" placeholder="Nº de polizas"  /> </td>
               <td><input type="date" class="form-control"  name="fechav" id="fechav" placeholder="Fecha vencimiento"  /></td>
           
     
          </tr>
         
            <tr class="success">
                    <th>Año</th>
              <th>Nº factura</th>
              <th>Procedencia</th>
               <th>Observacion</th>
               <th>  </th>
          </tr>
           </tr>
              <tr>
              <td>   <input type="date" class="form-control" value=""  name="ano" id="ano" placeholder="año"  /></td>
              <td><input type="text" class="form-control"  name="nfactura" id="nfactura" placeholder="Nº factura"  /></td>
            <td>   <input type="text" class="form-control" value=""  name="procedencia" id="procedencia" placeholder="Procedencia"  /></td>
              <td><textarea  id="observacion"  name="observacion" class="form-control" rows="4"    /></textarea></td>
          <td><input type="text" class="form-control"  name="" id="" placeholder="" required readonly="" /></td>
     
          </tr>













      </tbody>
  </table>


            <?php  
?>
         
           
      </tbody>
  </table>




</div>

  <p><button class="btn btn btn-success"  type="submit" name="Submit" > <i class="fa fa-floppy-o" aria-hidden="true"></i> Continuar</button></p>

            



            </div>
  




 

    </div>



</div>


</form>

</div>




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