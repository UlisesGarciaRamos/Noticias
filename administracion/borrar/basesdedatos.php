<?php
include("../php/conexion.php");
echo "<script type="text/javascript">alert("hola amor");</script> ";

if (isset($_POST['signup-username']) and !empty($_POST['signup-email']) and
isset($_POST['signup-password']) and !empty($_POST['signup-password'])) {

$con=mysqli_connect($host,$user,$pw)or die("Problemas al conectar");
mysqli_select_db($con, $db)or die("Problemas al conectar la bd");

mysqli_query($con, "INSERT INTO administrador (id,usuario,email,contrasena) VALUES ('$_POST[signup-username]','$_POST[signup-email]')$_POST[signup-password]',");
echo "datos insertados";
}else {
  echo "Problemas al insertar datos";
}

 ?>
