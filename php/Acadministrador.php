<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noticias";


$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$contrasena=$_POST['password'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO administrador (usuario, nombre, apellidos , email, password)
    VALUES ('$usuario', '$nombre', '$apellidos', '$email', '$contrasena')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>