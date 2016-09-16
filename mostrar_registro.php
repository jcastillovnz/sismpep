
<?php require_once('controlador/seguridad.php'); 

    

 if ( strtoupper($_SESSION["nivel"])=="ANALISTA"   ) {

 echo'<script type="text/javascript">
            alert("No tiene permiso para acceder a esta ubicacion solicite permiso al administrador");
      window.location="inicio.php"; 

         </script>';




} else {
 
}





?> 




<?php
        
    if ($_POST['id_equipo']  ) {
     
    

$id_equipo=$_POST['id_equipo'];
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
   

$bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "sismpep"; 
 
  $con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
  mysql_select_db($bd_base, $con); 
 
   
$SSQL="Update  t002_equipos SET  placa='$placa', modelo='$modelo', marca='$marca', color='$color', f_adquisicion='$fechaa',propietario='$propietario', f_retirodeactivos='$fechar', numero_de_poliza='$poliza', fecha_vencimiento='$fechav', ano='$ano', numerofactura='$nfactura', procedencia='$procedencia', observacion='$observacion' where id_equipo='$id_equipo'   ";
mysql_query($SSQL);








if ( empty($_POST['vehiculo'])){



}



else
{


$vehiculo= $_POST['vehiculo'];
      $cambio_transmision_caja = $_POST['cambio_transmision_caja'];
 $cambio_aceite_motor=  $_POST['cambio_aceite_motor'];
 $revision_aceite_motor_caja=  $_POST['revision_aceite_motor_caja'];
 $combustible=  $_POST['combustible'];
 $engrase=  $_POST['engrase'];
 $cambio_filtros=  $_POST['cambio_filtros'];
 $revision_presion_aire=  $_POST['revision_presion_aire'];


 
  $con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
  mysql_select_db($bd_base, $con); 
 

$SQL="Update  t003_plan_mantenimiento SET  vehiculo='$vehiculo', cambio_transmision_caja='$cambio_transmision_caja' ,cambio_aceite_motor='$cambio_aceite_motor',  revision_aceite_motor_caja='$revision_aceite_motor_caja'  , combustible='$combustible', engrase='$engrase', cambio_filtros='$cambio_filtros', revision_presion_aire='$revision_presion_aire'   where id_equipo = '$id_equipo'";
mysql_query($SQL);

}



 echo'<script type="text/javascript"> 
            alert("Guardado exitosamente");
          
  

         </script>';

}   




?>





 <!DOCTYPE html> 
<html lang="en"> 
  <head> 



  
    <meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
     <link rel="shortcut icon" href="Imagenes/favicon.png">

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







<script language="JavaScript" type="js/ajax.js"></script>

      
      
  <title>SISMPEP│Busqueda</title>




<header >

<div class="container-center"> 


<div class="container">  <!--centro todo en la pagina-->


<link rel="stylesheet" href="css/alertify.min.css" />
 
<link rel="stylesheet" href="css/default.min.css" />
 

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
        
          






<?PHP 

$_SESSION['id_equipo'] = isset($_SESSION['id_equipo']) ? $_SESSION['id_equipo'] : null ;



 $aeliminar =  $_SESSION['id_equipo'];       ?>




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
           <strong id="caracterusuario">  <i class="fa fa-check-circle"  id="colorverde" aria-hidden="true"></i>En linea:  <?php echo $_SESSION["usuarioactual"] ?>     </strong>
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

<?php 


$_POST['busqueda'] = isset($_POST['busqueda']) ? $_POST['busqueda'] : null ;




if ( $_SESSION['id_equipo'] )
{ 
// Tomamos el valor ingresado
$busqueda = $_SESSION['id_equipo'];

// Si está vacío, lo informamos, sino realizamos la búsqueda
if(empty($busqueda) )
{
echo "No se ha ingresado una cadena a buscar";
}





$con=mysql_connect("localhost","root","");
$sql = "SELECT * FROM t002_equipos WHERE id_equipo  LIKE '".$busqueda."' OR id_equipo LIKE '" . $busqueda."'";
mysql_select_db("sismpep", $con); 
$result = mysql_query($sql, $con); 

if ($row = mysql_fetch_array($result)){ 


        


    

         $result = mysql_query($sql,$con);  


        while ($registro = mysql_fetch_array($result)){


 ?>









<input type="hidden" name="id_equipo"  id="id_equipo"  value="<?php echo " $".id_equipo."";?>" />


<div class="well well-sm"><div class="pull-right">
              <div class="btn-group">

          
                <button  onClick='javascript: window.location.href="modificar.php";' type="button"  class="btn  btn-default btn-filter  btn-xs " ><i class="fa fa-refresh  fa-spin" aria-hidden="true"></i>   Modificar</button>
   



                <button type="button"     
           onclick="ConfirmDel(  )"      class="btn btn-warning  btn-danger btn-xs" data-target="pendiente"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
     


                <button type="button" onClick="window.open('controlador/imprimir.php',''); return false;"

            '  class="btn btn-default  btn-default btn-xs" ><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Imprimir</button>
              </div>
            </div>
    <table class="table table-bordered">

    
    
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
              <td>   <input type="text" class="form-control" value="<?php echo "{$registro['id_equipo']}";?>" name="" id="" placeholder="" required readonly /></td>
              <td><input type="text" class="form-control"  name="placa" id="placa" placeholder="placa" value="<?php echo "{$registro['placa']}";?>" required readonly /></td>

                 <?php        

   $_SESSION['id_equipo']="{$registro['id_equipo']}";
            $_SESSION['placa']="{$registro['placa']}";




                  ?>

              <td><input type="text" class="form-control"  name="modelo" id="modelo" placeholder="Modelo" value="<?php echo "{$registro['modelo']}";?>" required readonly/></td>
              <td><input type="text" class="form-control"  name="marca" id="marca" placeholder="Marca" value="<?php echo "{$registro['marca']}";?>" required readonly /> </td>
               <td><input type="text" class="form-control"  name="color" id="color" placeholder="Color" value="<?php echo "{$registro['color']}";?>" required readonly /></td>
    
          </tr>
      <tr class="success">
          
              <th>Fecha de adquisicion</th>
              <th>Propietario</th>
              <th>Fecha retiro de activos</th>
              <th>Nº de polizas</th>
              <th>Fecha de vencimiento</th>
     
          </tr>
              <tr>
              <td>   <input type="text" class="form-control"  name="fechaa" id="fechaa" placeholder="Fecha adquisicion" value="<?php echo "{$registro['f_adquisicion']}";?>" required readonly /></td>



              <td><input type="text" class="form-control"  name="propietario" id="propietario" placeholder="Propietario" value="<?php echo "{$registro['propietario']}";?>" required readonly /></td>




              <td><input type="text" class="form-control"  name="fechar" id="fechar" placeholder="Fecha retiro de activos" value="<?php echo "{$registro['f_retirodeactivos']}";?>" required readonly /></td>
              <td><input type="text" class="form-control"  name="poliza" id="poliza" placeholder="Nº de polizas" value="<?php echo "{$registro['numero_de_poliza']}";?>" required readonly /> </td>
               <td><input type="text" class="form-control"  name="fechav" id="fechav" placeholder="Fecha vencimiento" value="<?php echo "{$registro['fecha_vencimiento']}";?>" required readonly/></td>
           
     
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
              <td>   <input type="text" class="form-control" name="año" id="año" placeholder="año" value="<?php echo "{$registro['ano']}";?>"  required readonly /></td>
              <td><input type="text" class="form-control"  name="nfactura" id="nfactura" placeholder="Nº factura" value="<?php echo "{$registro['numerofactura']}";?>" required readonly /></td>
            <td>   <input type="text" class="form-control"  name="procedencia" id="procedencia" placeholder="Procedencia"  value="<?php echo "{$registro['procedencia']}";?>" required readonly /></td>
              <td><textarea  name="observacion" rows="2"    required readonly  class="form-control"  id="observacion"  />    <?php echo "{$registro['observacion']}";?>
              </textarea>  </td>
          <td><input type="text" class="form-control"  name="" id="" placeholder="" required readonly  /></td>
     
          </tr>
      </tbody>
  </table>








<?php   //Muestra notas y promedio
// busco las notas correspondientes todo esto esta anidado

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
               
                      <input type="text" class="form-control"  name="vehiculo" id="vehiculo" placeholder="vehiculo" value="<?php echo "{$registro2['vehiculo']}";?>" required readonly  />    


              </td>
              <td><input type="text" class="form-control"  name="cambio_transmision_caja" id="cambio_transmision_caja" placeholder="cambio transmision caja" value="<?php echo "{$registro2['cambio_transmision_caja']}";?>" required readonly  /></td>
              <td><input type="text" class="form-control"  name="cambio_aceite_motor" id="cambio_aceite_motor" placeholder="cambio_aceite_motor" value="<?php echo "{$registro2['cambio_aceite_motor']}";?>" required readonly  /></td>
              <td><input type="text" class="form-control"  name="revision_aceite_motor_caja" id="revision_aceite_motor_caja" placeholder="revision aceite motor/caja"  value="<?php echo "{$registro2['revision_aceite_motor_caja']}";?>" required readonly  /> </td>
               <td><input type="text" class="form-control"  name="combustible" id="combustible" placeholder="combustible"  value="<?php echo "{$registro2['combustible']}";?>" required readonly   /></td>
    
          </tr>
      <tr class="success">
          
              <th>
             Engrase</th>
              <th>Cambio filtros de aire</th>
            <th>Revision presion aire</th>
     
          </tr>
              <tr>
              <td>   <input type="text" class="form-control" value="<?php echo "{$registro2['engrase']}";?>"  name="engrase" id="engrase" placeholder="Engrase"  required readonly   /></td>
              <td><input type="text" class="form-control"  name="cambio_filtros" id="cambio_filtros" placeholder="  cambio_filtros" value="<?php echo "{$registro2['cambio_filtros']}";?>" required readonly  /></td>
              <td><input type="text" class="form-control"  name="revision_presion_aire" id="revision_presion_aire" placeholder="Revision presion aire"  value="<?php echo "{$registro2['revision_presion_aire']}";?>"   required readonly  /></td>
              <td><input type="text" class="form-control"  name="" id="" placeholder="" required readonly /> </td>
               <td  ><input type="text" class="form-control"  name="" id="" placeholder="" required readonly /> </td>   
           
     
          </tr>
            

           
      </tbody>
            
  </table>


</div>

</div>


            


            </div>
  




 

    </div>



</div>


</form>

</div>


<?php 


}}
?>



 


<?php 


//cierro el if
} 


else { 
?>


<div class="alert alert-warning">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
<?php
echo "<center> <h3>  No se encontraron registros que coincidan con: <b>$busqueda</b> </h3> </center>"; 
?>
</div> 
<?php
}}

else {
?>


<div class="alert alert-danger">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
<?php
echo "<center> <h3> El registro no existe <b></b> </h3> </center>"; 
?>
</div> 




<?php
}



?>


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