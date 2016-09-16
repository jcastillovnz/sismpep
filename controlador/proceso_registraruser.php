
<?php
 	 //$id_equipo=   $_POST['id_equipo'];
	
		$usuario= $_POST['usuario'];
		$clave = $_POST['clave'];
  $estado=$_POST['estado'];
         $nivel=$_POST['nivel'];
	 
	 
		 
		require('conexion.php');





     $sql = "INSERT INTO t001_usuarios( usuario, clave, estado,nivel) VALUES ('$usuario','$clave','$estado','$nivel')";




   $ejecutar = $enlace->query($sql) or trigger_error($enlace->error." [sql error]");

?>



<?php  
 echo'<script type="text/javascript">

 window.location.pathname="SISMPEP/configuracion.php"
alert("Registrado exitosamente");
         </script>';



?>
