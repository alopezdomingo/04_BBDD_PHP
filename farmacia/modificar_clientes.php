<?php
	$conexion = mysqli_connect("localhost","root","","tienda") or die("Error BBDD");

	$codigo = $_REQUEST['dni'];
	$nombre = $_REQUEST['nombre'];
	$categoria = $_REQUEST['provincia'];
	$cantidad= $_REQUEST['poblacion'];

	mysqli_query($conexion, "update clientes set dni='$dni', nombre='$nombre', provincia='$provincia', poblacion='$poblacion' where dni='$dni'") or die ("Error en la actualizacion");

	mysqli_close($conexion);

	header("location:listado_clientes.php?control=3");
?>