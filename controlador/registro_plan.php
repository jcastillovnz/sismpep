

<!DOCTYPE html>
<html>

<link rel="stylesheet" href="css/alertify.min.css" />
 
<link rel="stylesheet" href="css/default.min.css" />
 
<link rel="stylesheet" href="alertifyjs/css/alertify.css">
     <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/personalizacion.css">
<head>
	<title></title>
</head>
<body>




<?php
 	 //$id_equipo=   $_POST['id_equipo'];
		$vehiculo= $_POST['vehiculo'];
	    $cambio_transmision_caja = $_POST['cambio_transmision_caja'];
	     $cambio_aceite_motor = $_POST['cambio_aceite_motor'];

	     $revision_aceite_motor_caja= $_POST['revision_aceite_motor_caja'];
	     $combustible = $_POST['combustible'];
	     $engrase= $_POST['engrase'];
		$cambio_filtros = $_POST['cambio_filtros'];
		$revision_presion_aire = $_POST['revision_presion_aire'];
  $id_equipo=$_POST['id_equipo'];
       
	 
	 
		 
		require('conexion.php');





     $sql = "INSERT INTO t003_plan_mantenimiento( vehiculo, cambio_transmision_caja, cambio_aceite_motor, revision_aceite_motor_caja, combustible ,engrase, cambio_filtros, revision_presion_aire, id_equipo) VALUES ('$vehiculo','$cambio_transmision_caja','$cambio_aceite_motor','$revision_aceite_motor_caja','$combustible','$engrase','$cambio_filtros','$revision_presion_aire', '$id_equipo')";




   $ejecutar = $enlace->query($sql) or trigger_error($enlace->error." [sql error]");

?>



<?php  
 echo'<script type="text/javascript">
 window.location.pathname="SISMPEP/inicio.php"
alert("Guardado exitosamente");
         </script>';



?>


</body>

  <script src="js/jquery.js  " ></script>
   <script src="js/bootstrap.min.js"></script>
    <script src="js/pages.js"></script>
<script src="js/personalizacion.js"></script>
<script src="js/alertify.min.js"></script>

   echo '<script src="js/jquery.js ">    </script> <link rel="stylesheet" type="alertifyjs/css/alertify.css" href="css/default.min.css">';
</html>

