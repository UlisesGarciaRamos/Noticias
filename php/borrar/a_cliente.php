<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Actualizar Registro</title>
<link rel='stylesheet' type='text/css' href='menu_source/styles.css' />
<link rel='stylesheet' type='text/css' href='css/style2.css' />
</head>
<body background="../image/bgback.jpg" >

	<form action="" name="f2" id="f2" method="POST">
    <br><br><br>
	<div id='input'>
	
	<center>
	 <label for="v_dni"><strong>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INGRESA DNI:</strong></label>
        	<input type="text" name="v_dni" id="v_dni" maxlength="5" size="5">
				
			<input type="reset" name="v_btnLimpiar" id="v_btnLimpiar" value="Limpiar"></td>
        	<input name="v_btnBuscar" type="submit" id="v_btnBuscar" onClick="MM_validateForm('v_dni','','R');return document.MM_returnValue" value="Buscar">

    </center>
	  </div>
     <br />
	 </form>
	
<?php
$r_buscar=$_POST['v_dni'];

$enlace = mysqli_connect("localhost", "root", "", "noticias");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "select * from administrador where idAdmin=$r_buscar";

if ($resultado = mysqli_query($enlace, $consulta)) {

    /* obtener el array asociativo */
    while ($fila = mysqli_fetch_row($resultado)) {
        printf ("%s (%s) (%s) (%s) (%s) (%s) \n", $fila[0], $fila[1], $fila[2], $fila[3], $fila[4], $fila[5]);
		
		
		
		
		echo ('<tr>
<td width="139"> <font face="Arial, Helvetica, sans-serif"><strong>Id:</strong></font></td>
<td width="199"><input type="text" name="v_dni" id="v_dni" value="'.$fila[0].'" maxlength="5" size="5"></td>
</tr>');
echo('<tr>
<td> <font face="Arial, Helvetica, sans-serif"><strong>Usuario:</strong></font></td>
<td><input type="text" name="v_nombre" id="v_nombre" value="'.$fila[1].'" maxlength="40" size="35"></td>
</tr>');
echo('<tr>
<td> <font face="Arial, Helvetica, sans-serif"><strong>nombre:</strong></font></td>
<td><input type="text" name="v_apellidos" id="v_apellidos" value="'.$fila[2].'" maxlength="40" size="35"></td>
</tr>');
echo('<tr>
<td> <font face="Arial, Helvetica, sans-serif"><strong>apellidos:</strong></font></td>
<td><input type="text" name="v_usuario" id="v_usuario" value="'.$fila[3].'" maxlength="20" size="35"></td>
</tr>');
echo('<tr>
<td> <font face="Arial, Helvetica, sans-serif"><strong>email:</strong></font></td>
<td><input type="text" name="v_password" id="v_password" value="'.$fila[4].'" maxlength="128" size="35"></td>
</tr>');
echo('<tr>
<td> <font face="Arial, Helvetica, sans-serif"><strong>password:</strong></font></td>
<td><input type="text" name="v_password" id="v_password" value="'.$fila[5].'" maxlength="128" size="35"></td>
</tr>');
    }

    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
}

/* cerrar la conexión */
mysqli_close($enlace);


	?>

<form action="actualizacion2.php" name="f1" id="f1" method="post">
    <br><br><br><br><br><br>
    <table align="center" bgcolor="#0099CC" bordercolor="#000000">
      
<td><input name="v_btnEnviar" type="submit" id="v_btnEnviar" onClick="MM_validateForm('v_dni','','RisNum','v_nombre','','R','v_apellidos','','R','v_usuario','','R','v_dom','','R','v_tel','','RisNum','v_password','','R');return document.MM_returnValue" value="Guardar"></td></tr>  
    </table>
    </form> 

</table>

    </form>    
		
</div>
</body>
</html>

