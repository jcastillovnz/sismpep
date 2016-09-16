<?php
require_once('seguridad.php');

 $aeliminar= $_SESSION['id_equipo'];


require('conexion.php');


  $sql = "DELETE FROM  t002_equipos WHERE id_equipo= '$aeliminar' ";


   $ejecutar = $enlace->query($sql) or trigger_error($enlace->error." [sql error]");

 echo'<script type="text/javascript"> 
            alert("Eliminado exitosamente");
          
  window.location.pathname="SISMPEP/buscar.php"

         </script>';







?>
