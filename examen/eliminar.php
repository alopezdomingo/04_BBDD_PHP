<?php
	$conexion = mysqli_connect("localhost","root","","espadas") or die("Error BBDD");

	$id= $_REQUEST['id'];

	mysqli_query ($conexion, "delete from productos where id=$id") or die ("Error al eliminar producto");

	mysqli_close($conexion);

	header("location:listado.php?control=2");
?>