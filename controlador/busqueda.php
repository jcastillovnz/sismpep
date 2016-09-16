

<html>
<head>
<title>Buscador simple en PHP</title>
</head>
<body>
<form action="busqueda.php" method="post">
Buscar: <input name="palabra">
<input type="submit" name="buscador" value="Buscar">
</form>
<?php
if ($_POST['buscador'])
{ 
// Tomamos el valor ingresado
$buscar = $_POST['palabra'];

// Si está vacío, lo informamos, sino realizamos la búsqueda
if(empty($buscar))
{
echo "No se ha ingresado una cadena a buscar";
}else{
// Conexión a la base de datos y seleccion de registros
$con=mysql_connect("localhost","root","");
$sql = "SELECT * FROM t002_equipos WHERE id_equipo like '%$buscar%' ";
mysql_select_db("sismpep", $con); 

$result = mysql_query($sql, $con); 



// Imprimimos los resultados
if ($row = mysql_fetch_array($result)){ 
echo "Resultados para: <b>$buscar existe</b> ";

} else { 
// En caso de no encontrar resultados
echo " <h2>  No se encontraron resultados para: <b>$buscar</b> </h2>"; 
}
}
}
?>
</body>
</html>
