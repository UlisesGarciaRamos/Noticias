<?php
	$enlace = mysqli_connect("127.0.0.1", "root", "", "integralesbd");
	if (!$enlace) {
	    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	    exit;
	}
	$sql = "select nombreUsuario,puntuacion from usuario";
	$resultado = mysqli_query($enlace,$sql);

	$usuarios  = array();
	while ($row = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
		$usuarios[] = $row;
	}
	echo json_encode($usuarios);

?>