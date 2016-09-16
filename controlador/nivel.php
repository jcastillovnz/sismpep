<?php

$usuario=$_SESSION["usuarioactual"];


$sql = "select nivel from t001_usuarios where usuario = '".$usuario."'    "       ; 



$consulta = $enlace ->query($sql);




        while ($registro2 = mysqli_fetch_assoc($consulta )){

 $niveles="{$registro2['nivel']}";


}

//if($niveles.toUpperCase() == "Analista" OR $niveles.toLowerCase() == "Analista"){


if ($niveles=="Administrador" || $niveles=="administrador") {


$_SESSION["nivel"]=$niveles;

	echo "administrador";

  echo'<script type="text/javascript">
      
        window.location="../inicio.php"; 
         </script>';


} 

if($niveles=="Analista" || $niveles=="analista") {

$_SESSION["nivel"]=$niveles;



	echo "analista";
 echo'<script type="text/javascript">
      
        window.location="../inicio.php"; 
         </script>';





} 






?>