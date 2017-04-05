<?php
	$conexion = new mysqli("localhost","root","","noticias");
	if($conexion){
		echo "conexion realizada";
	}else{
		echo "falló";
	}
	
?>