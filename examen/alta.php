<?php
	$conexion=mysqli_connect("localhost","root","","tienda") or die ("Error al conectar a la base de datos");
	
	$nombre = $_REQUEST['nombre'];
	$categoria = $_REQUEST['categoria'];
	$cantidad= $_REQUEST['cantidad'];
	$precio = $_REQUEST['precio'];
	
	mysqli_query($conexion,"insert into productos(nombre,categoria,cantidad,precio) values ('$nombre','$categoria',$cantidad,$precio)") or die ("No ha sido posible dar el alta");

	mysqli_close($conexion);

	header("location:listado.php?control=1");
?>