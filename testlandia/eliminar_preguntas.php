<?php
	$conexion = mysqli_connect("localhost","root","","testlandia") or die("Error BBDD");

	$id= $_REQUEST['id'];

	mysqli_query ($conexion, "delete from preguntas where id=$id") or die ("Error al eliminar producto");

	mysqli_close($conexion);

	header("location:list_preguntas.php?control=2");
?>