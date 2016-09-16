
<?php
$id_usuarios= $_POST['id_usuarios']  ;

$usuario=  $_POST['usuario'] ;
$clave = $_POST['clave']  ;
$estado=   $_POST['estado']  ;
$nivel=   $_POST['nivel']  ;

$servername="localhost";
$username = "root";
$password = "";
$dbname = "sismpep";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE t001_usuarios SET usuario='$usuario', clave='$clave', estado='$estado', nivel='$nivel' WHERE id_usuarios='$id_usuarios'";

if (mysqli_query($conn, $sql)) {



echo'<script type="text/javascript">
 window.location.pathname="SISMPEP/configuracion.php"
alert("Actualizacion realizada exitosamente");
         </script>';





} else {



    echo "Error " . mysqli_error($conn);



}

mysqli_close($conn);
?>