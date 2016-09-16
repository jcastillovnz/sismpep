
<?php


/* A continuación, realizamos la conexión con nuestra base de datos en MySQL */ 
require("conexion.php");


/* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función htmlentities para evitar inyecciones SQL. */ 


$myusuario = "SELECT usuario from t001_usuarios where usuario= '".htmlentities($_POST["usuario"])."'  ";
$result = $enlace->query($myusuario );



$nmyusuario = mysqli_num_rows($result);

//Si existe el usuario, validamos también la contraseña ingresada  el estado del usuario y el nivel de acceso... 
if($nmyusuario != 0)
{ 
  $sql = "select usuario from t001_usuarios where estado = 'Activo'  and usuario = '".htmlentities($_POST["usuario"])."' and clave = '".htmlentities($_POST["clave"])."'"; 
$myclave = $enlace ->query($sql);


  
 $nmyclave= mysqli_fetch_assoc($myclave); 
  //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo. 
  if($nmyclave != 0)
  { 





      @session_start(); 
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 





 $_SESSION["autentica"] = "SI"; 

$_SESSION["usuarioactual"]=htmlentities($_POST["usuario"]);

     //$_SESSION["usuarioactual"] = mysqli_fetch_assoc($myclave,0,0); 



//EVALUO NIVEL DE USUARIO






$usuario=$_SESSION["usuarioactual"];


$sql = "select nivel from t001_usuarios where usuario = '".$usuario."'    "       ; 



$consulta = $enlace ->query($sql);




        while ($registro2 = mysqli_fetch_assoc($consulta )){

 $niveles="{$registro2['nivel']}";




$_SESSION["nivel"]=$niveles;


 echo'<script type="text/javascript">
  
           
window.location="../inicio.php"; 
         </script>';


}




     }
   else{ 



 echo'<script type="text/javascript">
            alert("La contrase\u00f1a del usuario no es correcta.");
           
window.location="../index.html"; 
         </script>';


   } 
}
else
{ 
   echo'<script type="text/javascript">
            alert("El usuario no existe");
        window.location="../index.html"; 
         </script>';

} 













mysqli_close($enlace); 



?>