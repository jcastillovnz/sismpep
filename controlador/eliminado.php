<?php
			
			    $conexion = mysql_connect("localhost", "root", ""); 
        //Comprobamos si la conexión ha tenido exito
        if($conexion){ 
           echo ''; 
        }else{ 
           echo 'Ha sucedido un error inexperado en la conexion de la base de datos<br>'; 
        } 
		
         mysql_select_db("sicna",$conexion);
		
			  
			  $query = "delete from t001_alumnos where nu_cedula = ". $_POST['nu_cedula']; 
$result = mysql_query($query); 




	 echo'<script type="text/javascript"> 
            alert("Eliminado ");
          
  window.location.pathname="SISMPEP/inicio.php"

         </script>';