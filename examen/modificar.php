<?php
	$conexion = mysqli_connect("localhost","root","","espadas") or die("Error BBDD");

	$id = $_REQUEST['id'];
	$nombre = $_REQUEST['nombre'];
	$precio= $_REQUEST['precio'];

	mysqli_query($conexion, "update productos set nombre='$nombre', precio=$precio where id =$id") or die ("Error en la actualizacion");

	mysqli_close($conexion);

	header("location:listado.php?control=3");
?>