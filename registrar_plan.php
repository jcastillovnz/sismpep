 
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


<?php 
 

	$placa= $_POST['placa'];
	    $modelo = $_POST['modelo'];
		$marca= $_POST['marca'];
		$color = $_POST['color'];
		$fechaa = $_POST['fechaa'];
		$propietario = $_POST['propietario'];
		$fechar = $_POST['fechar'];
	    $poliza= $_POST['poliza'];
		$fechav = $_POST['fechav'];
		$ano = $_POST['ano'];
		$nfactura = $_POST['nfactura'];
		$procedencia= $_POST['procedencia'];
		$observacion= $_POST['observacion'];








		require('controlador/conexion.php');





       $sql = "INSERT INTO t002_equipos( placa, modelo, marca, color, f_adquisicion,propietario, f_retirodeactivos, numero_de_poliza, fecha_vencimiento, ano, numerofactura, procedencia, observacion) VALUES ('$placa','$modelo','$marca','$color','$fechaa','$propietario','$fechar','$poliza','$fechav','$ano','$nfactura','$procedencia','$observacion')";


   $ejecutar = $enlace->query($sql) or trigger_error($enlace->error." [sql error]");



   ?>


      
      
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

   <body class="letrasprincipalblanca" id="page-top"  data-target=".navbar-fixed-top">
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
             <li><a class="page-scroll"  href="inicio.php">Gestión del sistema</a>
 
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
           



<?php 
$bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "sismpep"; 
 
  $con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
  mysql_select_db($bd_base, $con); 
mysql_select_db("sismpep",$con);


$query = "select * from t002_equipos WHERE placa = '$placa'";

$result = mysql_query($query);
while ($registro = mysql_fetch_array($result)){


$id_equipo="{$registro['id_equipo']}";
?>
      




 
<!-- inicio de composicion de cuerpo-->
<!-- seccion servicios -->
  
        <div class="container">
            <div class="row">  <div class="col-sm-12 col-lg-12">
             <div id="imaginary_container"> 
             <form role="form" action="buscar.php" method="POST" id="busqueda" > 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control" name="busqueda"  placeholder="Buscar Nº placa o  Registro"  required="">
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

       <form name="registro"  method="post" action="controlador/registro_plan.php"  >

 <p  class="panel" align="left"><i class="fa fa-pie-chart" aria-hidden="true"></i>  Plan de mantenimiento  </p> <p align="left"  > <i class="fa fa-table" aria-hidden="true"></i> <strong>  Registro Nº: <?php  echo  " $id_equipo "; ?>  </strong> </p>
<div class="table-responsive"> 






  <table class="table table-bordered">
      <thead>
          <tr class="success">
       <th>Vehiculo/Maquinaria</th>
              <th>Cambio aceite caja/transmision </th>
              <th>Cambio aceite motor</th>
              <th>Revision aceite motor/caja</th>
              <th>Combustible</th>
    
             
        
              
          </tr>
      </thead>
      <tbody>



          <tr>
              <td>  

              <input type="hidden" name="id_equipo"  id="id_equipo"  value="<?php echo "{$registro['id_equipo']}";?>" />
             

  <input type="hidden" name="vehiculo"  id="vehiculo"  value="" />
                     <div class="form-group">
                           
                            <select  id="vehiculo" name="vehiculo" class="form-control" >
                                <option value="" required selected="">Elija una opcion:</option>
                           
                      <option value="Vehiculos">Vehiculos</option> 
                      <option value="Camiones">Camiones</option> 
                      <option value="Volquetas">Volquetas</option> 
                      <option value="Mototraillas">Mototraillas </option> 
                      <option value="Payloader">Payloader</option> 
                              <option value="Patrol">Patrol</option> 
                               <option value="Retroexcavadoras
">Retroexcavadoras
</option> 
                                <option value="Tampos">Tampos</option> 
                              
                              <option value="Jumbo">Jumbo</option> 

<option value="Finisher/pavimentadora"> Finisher/pavimentadora</option> 
<option value="Minishowel">Minishowel</option> 
<option value="Tractor">Tractor</option> 
<option value="Lowboys">Lowboys </option> 
<option value="Vibrocompactadora">Vibrocompactadora</option> 



                      <option value="Pata de cabra">Pata de cabra</option> 

 <option value="Pata de cabra">Pata de cabra</option> 
  <option value="Otros tipos">Otros tipos</option> 

             
        
                               
                            </select>
                        </div>  


              </td>
              <td><input type="date" class="form-control"  name="cambio_transmision_caja" id="cambio_transmision_caja" placeholder="cambio transmision caja" value=""  /></td>
              <td><input type="date" class="form-control"  name="cambio_aceite_motor" id="cambio_aceite_motor" placeholder="cambio aceite motor" value=""  /></td>
              <td><input type="date" class="form-control"  name="revision_aceite_motor_caja" id="revision_aceite_motor_caja" placeholder="revision aceite motor/caja"  value=""  /> </td>
               <td><input type="date" class="form-control"  name="combustible" id="combustible" placeholder="combustible"  value=""  /></td>
    
          </tr>
      <tr class="success">
          
              <th>
             Engrase</th>
              <th>Cambio filtros de aire</th>
            <th>Revision presion aire</th>
     
          </tr>
              <tr>
              <td>   <input type="date" class="form-control" value=""  name="engrase" id="engrase" placeholder="Engrase"   /></td>
              <td><input type="date" class="form-control"  name="cambio_filtros" id="cambio_filtros" placeholder="cambio_filtros" value=""   /></td>
              <td><input type="date" class="form-control"  name="revision_presion_aire" id="revision_presion_aire" placeholder="Revision presion aire"  value=""     /></td>
              <td><input type="text" class="form-control"  name="" id="" placeholder=""  readonly /> </td>
               <td  ><input type="text" class="form-control"  name="" id="" placeholder=""  readonly /> </td>   
           
     
          </tr>
            

           
      </tbody>
            
  </table>




</div>

  <p><button class="btn btn btn-success"  type="submit" name="Submit" ><i class="fa fa-floppy-o" aria-hidden="true"></i> Finalizar</button></p>

            



            </div>
  




 

    </div>



</div>

<?php     }  ?>
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
 <h5>Desarrolado por; Analiz Molero, Jessica Navas y Jessica Acibe (U.N.E.F.A) </h5>
     
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