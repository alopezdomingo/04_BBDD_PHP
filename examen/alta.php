<?php
	$conexion=mysqli_connect("localhost","root","","espadas") or die ("Error al conectar a la base de datos");
	
	$nombre = $_REQUEST['nombre'];
	$precio = $_REQUEST['precio'];
	
	mysqli_query($conexion,"insert into productos(nombre,precio) values ('$nombre', $precio)") or die ("No ha sido posible dar el alta");

	mysqli_close($conexion);

	header("location:listado.php?control=1");
?>