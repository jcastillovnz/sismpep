 
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
    
<script type="text/javascript">
function ConfirmDel() {
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Esta seguro de eliminar este registro?  Este proceso es irreversible");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
//PROCEDO A ELIMINAR
 window.location.pathname="SISMPEP/controlador/eliminar.php"





}
//Detectamos si el usuario denegó el mensaje
else {

}
}
</script>


    





      
      
  <title>SISMPEP│Modificar</title>




<header >

<div class="container-center"> 


<div class="container">  <!--centro todo en la pagina-->


<link rel="stylesheet" href="css/alertify.min.css" />
 
<link rel="stylesheet" href="css/default.min.css" />
 

     <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/personalizacion.css">


  
<!--Inicio de navbar--> 


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
  

<?php if ( $_SESSION["nivel"] =="administrador" || $_SESSION["nivel"]=="Administrador"  ) {

?>

  <li><a class="page-scroll"  href="configuracion.php">Gestión del sistema</a>

  <?php

} else {
 
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



<?php if ( $_SESSION["nivel"] =="administrador" || $_SESSION["nivel"]=="Administrador"  ) {

?>

 


              <div class="btn-group">
              <button onClick='javascript: window.location.href="registrar.php";'  type="button"   class="btn btn-default btn-filter  btn-xs " >  <i class="fa fa-wpforms" aria-hidden="true"></i> Registrar equipo     </button>
        <?php

} else {
 
}
 ?>

                
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






   $amodificar=  $_SESSION['placa'];



   
mysql_select_db("sismpep",$con);
         $query = "select * from t002_equipos WHERE placa LIKE '".$amodificar."' OR id_equipo LIKE '" . $amodificar."'";

         $result = mysql_query($query);  


        while ($registro = mysql_fetch_array($result)){



 ?>



 
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

<div class="well well-sm"><div class="pull-right">
           <div class="btn-group">

          
                <button  onClick='javascript: window.location.href="modificar.php";' type="button"  class="btn btn-success  btn-filter  btn-xs " ><i class="fa fa-refresh  fa-spin" aria-hidden="true"></i>   Modificar</button>
   



                <button type="button"     
           onclick="ConfirmDel(  )"      class="btn btn-warning  btn-danger btn-xs" data-target="pendiente"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
     


                <button type="button" onClick="window.open('controlador/imprimir.php',''); return false;"

            '  class="btn btn-default  btn-default btn-xs" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Imprimir</button>
              </div>
            </div>
    <table class="table table-bordered">

       <form name="registro"  method="post" action="mostrar_registro.php"  >
    
</div>

  <p  class="panel" align="left"> <i class="fa fa-truck" aria-hidden="true"></i> Registro de equipo     
                                                                           </p>  
<div class="table-responsive"> 

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
              <td>   <input type="text" class="form-control" value="<?php echo "{$registro['id_equipo']}";?>" name="id_equipo" id="id_equipo" placeholder="" required readonly /></td>
              <td><input type="text" class="form-control"  name="placa" id="placa" placeholder="placa" value="<?php echo "{$registro['placa']}";?>" required  /></td>

   <?php              $_SESSION['id_equipo']=$registro['id_equipo']; ?>

              <td><input type="text" class="form-control"  name="modelo" id="modelo" placeholder="Modelo" value="<?php echo "{$registro['modelo']}";?>" required /></td>
              <td><input type="text" class="form-control"  name="marca" id="marca" placeholder="Marca" value="<?php echo "{$registro['marca']}";?>" required /> </td>
               <td><input type="text" class="form-control"  name="color" id="color" placeholder="Color" value="<?php echo "{$registro['color']}";?>" required  /></td>
    
          </tr>
      <tr class="success">
          
              <th>Fecha de adquisicion</th>
              <th>Propietario</th>
              <th>Fecha retiro de activos</th>
              <th>Nº de polizas</th>
              <th>Fecha de vencimiento</th>
     
          </tr><tr>


              <td><input type="date" class="form-control"  name="fechaa" id="fechaa" placeholder="Fecha adquisicion" value="<?php echo "{$registro['f_adquisicion']}";?>"   /></td>
              
                     <td><input type="text" class="form-control"  name="propietario" id="propietario" placeholder="Propietario" value="<?php echo "{$registro['propietario']}";?>"   /></td>


              <td><input type="date" class="form-control"  name="fechar" id="fechar" placeholder="Fecha retiro de activos" value="<?php echo "{$registro['f_retirodeactivos']}";?>"  /></td>
              <td><input type="text" class="form-control"  name="poliza" id="poliza" placeholder="Nº de polizas" value="<?php echo "{$registro['numero_de_poliza']}";?>"  /> </td>
               <td><input type="date" class="form-control"  name="fechav" id="fechav" placeholder="Fecha vencimiento" value="<?php echo "{$registro['fecha_vencimiento']}";?>"  /></td>
           
     
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
              <td>   <input type="date" class="form-control" name="ano" id="ano" placeholder="año" value="<?php echo "{$registro['ano']}";?>"    /></td>
              <td><input type="text" class="form-control"  name="nfactura" id="nfactura" placeholder="Nº factura" value="<?php echo "{$registro['numerofactura']}";?>"   /></td>
            <td>   <input type="text" class="form-control"  name="procedencia" id="procedencia" placeholder="Procedencia"  value="<?php echo "{$registro['procedencia']}";?>"  /></td>
              <td><textarea  name="observacion" rows="4"    required  class="form-control"  id="observacion"  /><?php echo "{$registro['observacion']}";?>
              </textarea>  </td>
          <td><input type="text" class="form-control"  name="" id="" placeholder="" required readonly /></td>
     
          </tr>
      </tbody>
  </table>








<?php   //Muestra notas y promedio
// busco las notas correspondientes todo esto esta anidado
 $con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
  mysql_select_db($bd_base, $con); 


mysql_select_db("sismpep",$con);
         $query = "select * from t003_plan_mantenimiento WHERE id_equipo = {$registro['id_equipo']}";



         $result2 = mysql_query($query);  
        while ($registro2 = mysql_fetch_array($result2)){


 ?>

        








 <p  class="panel" align="left"><i class="fa fa-pie-chart" aria-hidden="true"></i>  Plan de mantenimiento </p>
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
               
                      <input type="text" class="form-control"  name="vehiculo" id="vehiculo" placeholder="vehiculo" value="<?php echo "{$registro2['vehiculo']}";?>"   />    


              </td>
              <td><input type="date" class="form-control"  name="cambio_transmision_caja" id="cambio_transmision_caja" placeholder="cambio transmision caja" value="<?php echo "{$registro2['cambio_transmision_caja']}";?>"  /></td>
              <td><input type="date"class="form-control"  name="cambio_aceite_motor" id="cambio_aceite_motor" placeholder="cambio_aceite_motor" value="<?php echo "{$registro2['cambio_aceite_motor']}";?>"  /></td>
              <td><input type="date" class="form-control"  name="revision_aceite_motor_caja" id="revision_aceite_motor_caja" placeholder="revision aceite motor/caja"  value="<?php echo "{$registro2['revision_aceite_motor_caja']}";?>"  /> </td>
               <td><input type="date" class="form-control"  name="combustible" id="combustible" placeholder="combustible"  value="<?php echo "{$registro2['combustible']}";?>"  /></td>
    
          </tr>
      <tr class="success">
          
              <th>
             Engrase</th>
              <th>Cambio filtros de aire</th>
            <th>Revision presion aire</th>
     
          </tr>
              <tr>
              <td>   <input type="date" class="form-control" value="<?php echo "{$registro2['engrase']}";?>"  name="engrase" id="engrase" placeholder="Engrase"   /></td>
              <td><input type="date" class="form-control"  name="cambio_filtros" id="cambio_filtros" placeholder="  cambio_filtros" value="<?php echo "{$registro2['cambio_filtros']}";?>"  /></td>
              <td><input type="date" class="form-control"  name="revision_presion_aire" id="revision_presion_aire" placeholder="Revision presion aire"  value="<?php echo "{$registro2['revision_presion_aire']}";?>"    /></td>
              <td><input type="tex" class="form-control"  name="" id="" placeholder="" required readonly /> </td>
               <td  ><input type="tex" class="form-control"  name="" id="" placeholder="" required readonly /> </td>   
           
      
          </tr>
            

            
      </tbody>
         
  </table>


</div>



</div>



 <?php 


}
?> 

<button class="btn btn btn-success"  type="submit" name="Submit" > <i class="fa fa-floppy-o" aria-hidden="true"></i> Actualizar datos</button>
</form>



<?php 
}
?>
  

            </div>
  




    </div>


</div>


</div>


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