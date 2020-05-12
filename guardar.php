<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','','prueba');
	//verificamos la conexion
	if(!$conectar){
		echo"No se pudo conectar con el servidor";
	}else{

		$base=mysql_select_db('prueba');
		if(!$base){
			echo"No se encontro la base de datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$mensaje=$_POST['mensaje'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$nombre',
								   '$correo',
								   '$mensaje')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Error :(";
	}else{
		echo"Datos guardados :)<br><a href='index.html'>Volver</a>";
	}
?>