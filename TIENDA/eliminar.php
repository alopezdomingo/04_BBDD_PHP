<?php
	$conexion = mysqli_connect("localhost","root","","tienda") or die("Error BBDD");

	$codigo= $_REQUEST['cod'];

	mysqli_query ($conexion, "delete from productos where codigo=$codigo") or die ("Error al eliminar producto");

	mysqli_close($conexion);

	header("location:listado_way.php?control=2");
?>