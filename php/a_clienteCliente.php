<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar Registro</title>
<link rel='stylesheet' type='text/css' href="estilos.css" />
</head>
<body background="../image/bgback.jpg" >

	<form action="" name="f2" id="f2" method="POST">
    
	<div id='input'>
	<br />	<br />
	<center>
	 <label for="v_dni"><strong>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INGRESA ID:</strong></label>
        	<input type="text" name="v_dni" id="v_dni" maxlength="5" size="5">
				
			<input type="reset" name="v_btnLimpiar" id="v_btnLimpiar" value="Limpiar"></td>
        	<input name="v_btnBuscar" type="submit" id="v_btnBuscar" onClick="MM_validateForm('v_dni','','R');return document.MM_returnValue" value="Buscar">

    </center>
	  </div>
     
	 </form>
	
<?php

$r_buscar=$_POST['v_dni'];

if (empty($r_buscar)) 
	{
    	$r_buscar=1;
	}

$enlace = mysqli_connect("localhost", "root", "", "noticias");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "select * from usuario where idUsuario=$r_buscar";

if ($resultado = mysqli_query($enlace, $consulta)) {

    /* obtener el array asociativo */
    while ($fila = mysqli_fetch_row($resultado)) {
        //printf ("%s (%s) (%s) (%s) (%s) (%s) \n", $fila[0], $fila[1], $fila[2], $fila[3], $fila[4], $fila[5]);
		echo "<form class='contacto'action='actualizacionCliente.php' method='post'>";
		echo ('<tr>
<div><label>Id:</label> 
<input type="text" name="id" id="id" value="'.$fila[0].'" readonly="readonly" maxlength="50"></td>
</div>' );


echo ('
<div><label>Nombre:</label>
<td><input type="text" name="nombre" value="'.$fila[1].'" maxlength="50">
</div>');

echo ('
<div><label>Apellidos:</label>
<input type="text" name="apellidos"  value="'.$fila[2].'" maxlength="50"></div>');

echo ('
 <div><label>Usuario:</label>
<input type="text" name="usuario"  value="'.$fila[3].'" maxlength="50">
</div>');

echo ('<div><label>Email:</label>
<input type="email" name="email" value="'.$fila[4].'" maxlength="50"></div>');

echo ('<div><label>Password:</label>
<input type="password" name="password" value="'.$fila[5].'" maxlength="50"></div>');

echo ('<div><label>Estado:</label>
<input type="text" name="estado" value="'.$fila[6].'" maxlength="50"></div>');

echo ('
<input type="submit"  value="Actualizar" maxlength="50"></div>');


echo		"</form>";
		
		
		
		

    }

    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
}

/* cerrar la conexión */
mysqli_close($enlace);


	?>

<form action="actualizacion2.php" name="f1" id="f1" method="post">


    </form>    
		
</div>
</body>
</html>

