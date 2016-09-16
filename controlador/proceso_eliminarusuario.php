
<?php
require_once('seguridad.php');
require('conexion.php');



?>

<?php






$aeliminar= $_GET['id'];
 
 $sql = "DELETE FROM  t001_usuarios WHERE id_usuarios= '$aeliminar' ";


   $ejecutar = $enlace->query($sql) or trigger_error($enlace->error." [sql error]");
 


echo'<script type="text/javascript">
 window.location.pathname="SISMPEP/configuracion.php"
alert("Eliminado  exitosamente el usuario '.$aeliminar.'   ");
         </script>';


?>
