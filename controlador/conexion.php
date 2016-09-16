

 <?php 

//variable que guarda la conexión de la base de datos
     $enlace = new mysqli( 'localhost', 'root', '', 'sismpep');
	$enlace->set_charset('utf8');
		
	if (!$enlace) {
		echo "Error al Conectar";
	}

?>