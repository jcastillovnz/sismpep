<?php require_once('controlador/seguridad.php'); 

    

 if ( strtoupper($_SESSION["nivel"])=="ANALISTA"   ) {

 echo'<script type="text/javascript">
            alert("No tiene permiso para acceder a esta ubicacion solicite permiso al administrador");
      window.location="inicio.php"; 

         </script>';




} else {
 
}





?> 


<script type="text/javascript">







function Confirmdb() {
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Esta seguro de de realizar esta copia de seguridad ?  ");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
//PROCEDO A ELIMINAR
 window.location.pathname="SISMPEP/controlador/exportardb.php"





}
//Detectamos si el usuario denegó el mensaje
else {

}
}






</script>

 <!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    





<script language="JavaScript" type="js/ajax.js"></script>

      
      
  <title>SISMPEP│Panel de control</title>




<header >

<div class="container-center"> 


<div class="container">  <!--centro todo en la pagina-->


<link rel="stylesheet" href="css/alertify.min.css" />
 
<link rel="stylesheet" href="css/default.min.css" />
 

     <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/personalizacion.css">


  
<!--Inicio de navbar--> 

   <body id="page-top"  data-target=".navbar-fixed-top">
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
           <li class=""  ><a class="page-scroll"  href="">Gestión del sistema</a>

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
            <?php 



$sql = "SELECT * FROM t001_usuarios ";


$result = $enlace->query($sql);


 ?>
              <div class="col-lg-12 text-center"  >
        <div class="row"    >       
      <div class="container">

<div class="well well-sm"   >






                 

<div class="panel panel-default"  align="left"> 
 <button onClick='javascript:  
                  window.location.href="registrar_usuario.php";'  type="button"   class="btn btn-success  btn-xs " ><i class="fa fa-users" aria-hidden="true"></i>  Registrar usuario</button>   
  <div class="panel-body">
<strong>
Registro de usuarios</strong> 



</div> </div>

       

<table class="table table-bordered" align="center" >
    <thead  >
      <tr>
        <th  >Id usuario</th>
        <th >Usuario</th>
            <th   >Contraseña</th>
        <th   >Estado de acceso</th>
            <th   >Nivel de acceso</th>
             <th   >Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php  
        while ($registro = mysqli_fetch_array($result)){
?>






        <td> <input type="number" name="id_usuarios" id="id_usuarios" placeholder="" class="form-control" value="<?php echo "{$registro['id_usuarios']}";?>"  required readonly /></td>
        <td><input type="text" class="form-control" value="<?php echo "{$registro['usuario']}";?>" name="" id="" placeholder="" required readonly /></td>

        <td><input type="password" class="form-control" value="<?php echo "{$registro['clave']}";?>" name="" id="" placeholder="" required readonly /></td>


        <td><input type="text" class="form-control" value="<?php echo "{$registro['estado']}";?>" name="" id="" placeholder="" required readonly />       </td>
     



</td>




        <td><input type="text" class="form-control" value="<?php echo "{$registro['nivel']}";?>" name="" id="" placeholder="" required readonly />       </td>
     
                <td    align="center">
             
<div class="btn-group ">
 
  <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" >
    <span class="fa fa-caret-down" title="Toggle dropdown menu"> </span>
  </a>
  <ul class="dropdown-menu">
    <li><a onClick='javascript: window.location.href="modificar_usuario.php?id=<?php echo $registro['id_usuarios']; ?>   "' ><i class="fa fa-pencil fa-fw"></i> Modificar</a></li>
    <li><a onClick='javascript: window.location.href="controlador/eliminarusuario.php?id=<?php echo $registro['id_usuarios']; ?>   "'><i class="fa fa-trash-o fa-fw"></i> Eliminar</a></li>
    


  </ul>
</div>
            </td>
      </tr>




      <?php  
}
?> 



    </tbody>
  </table>

<div class="panel panel-default"  align="center">    <div class="panel-body">
<strong>
Base de datos</strong> </div> </div>

<button type="button"   onclick="Confirmdb(  )"   class="btn btn-warning"><i class="fa fa-pie-chart" aria-hidden="true"></i> Copia de seguridad  <i class="fa fa-database" aria-hidden="true"></i> </button>


<br>
<br><br>





</div>












</div>


</div>
</div>




  <hr class="featurette-divider">






<link rel="stylesheet" href="css/social-buttons.css">
  
         
  
    </div> <!-- /.row -->
</div> <!-- /.container -->




    

      
</table>
</div>
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