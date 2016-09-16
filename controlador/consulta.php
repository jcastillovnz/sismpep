<?php
 
//Configuracion de la conexion a base de datos
		require('controlador/conexion.php');
//consulta todos los empleados



$sql = "SELECT MAX(id_equipo)  AS id FROM t002_equipos";
$result = $enlace->query($sql);






 if ($row = mysqli_fetch_row($result)) 
 {
   $numero_de_registros= trim($row[0]);



?>

<?php


    echo   "Nº de registros: $numero_de_registros "  ;

  }
?>
</table>