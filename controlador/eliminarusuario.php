<?php
require_once('seguridad.php');
require('conexion.php');


$_SESSION['proceso_eliminar']= $_GET['id'];
?>



<script language="Javascript"> 
confirmar=confirm("¿Esta seguro de eliminar este usuario?. Este proceso es irreversible "); 

if (confirmar) 
// si pulsamos en aceptar
window.location.pathname="SISMPEP/controlador/proceso_eliminarusuario.php";





else 
// si pulsamos en cancelar

 window.location.pathname="SISMPEP/configuracion.php";


</script>



