
<?php
	session_start();
	$usuario=$_POST['c_nombre'];
	$contrasena=$_POST['c_password'];
	include("../php/conexion.php");
	$proceso= $conexion->query("select * from usuario where usuario='$usuario'
	AND password='$contrasena'");
	
	if($resultado = mysqli_fetch_array($proceso)){
		$_SESSION['u_usuario'] =$usuario;
		header("Location: ../administracion/index.php");
		echo "sesion realizada";
	}else{
		header("Location: ../index.html");
		echo "valio kk la conexion";
	}
	
?>


