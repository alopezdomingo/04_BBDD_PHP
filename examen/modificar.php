<?php
	$conexion = mysqli_connect("localhost","root","","tienda") or die("Error BBDD");

	$codigo = $_REQUEST['codigo'];
	$nombre = $_REQUEST['nombre'];
	$categoria = $_REQUEST['categoria'];
	$cantidad= $_REQUEST['cantidad'];
	$precio= $_REQUEST['precio'];

	mysqli_query($conexion, "update productos set nombre='$nombre', categoria='$categoria', cantidad=$cantidad, precio=$precio where codigo =$codigo") or die ("Error en la actualizacion");

	mysqli_close($conexion);

	header("location:listado.php?control=3");
?>