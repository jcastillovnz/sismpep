<?php
//Reanudamos la sesión 
@session_start(); 


//Validamos si existe realmente una sesión activa o no 
if($_SESSION["autentica"] != "SI" )
{ 
  //Si no hay sesión activa, lo direccionamos al index.php (inicio de sesión) 
  header("Location: index.html"); 
  exit(); 
} 





 $url_actual = $_SERVER["REQUEST_URI"];    





$niveles="Analista";





if (strtoupper($_SESSION["nivel"]) == strtoupper($niveles) && $url_actual== "configuracion.php"   ) {  

#DEGEGO ACCESO
	

 echo'<script type="text/javascript">
            alert(No tiene permiso para acceder a esta ubicacion solicite permiso al administrador ");
window.location="../inicio.php"; 
         </script>';




} else {


	# No pasa nada
}
















?>