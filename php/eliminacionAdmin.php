<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noticias";

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$contrasena=$_POST['password'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM administrador where idAdmin=$id";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Registro eliminado con exito";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
</body>
</html>
