<?php
$usuario = $_POST['signup-username'];
$email = $_POST['signup-email'];
$contrasena = $_POST['signup-password'];
echo $usuario." ".$email;

$enlace = mysqli_connect("localhost", "root", "root", "proyecto");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    exit;
}
mysqli_query($enlace, "insert into administrador(usuario,email,contrasena) values('$usuario','$email',$contrasena)");
?>