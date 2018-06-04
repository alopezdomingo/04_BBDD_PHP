<?php
	$conexion = mysqli_connect("localhost","root","","tienda") or die("Error BBDD");

	$dni= $_REQUEST['dni'];

	mysqli_query ($conexion, "delete from clientes where dni='$dni'")/*hay que entrecomillar el dato char*/ or die ("Error al eliminar cliente");

	mysqli_close($conexion);

	header("location:listado_clientes.php?control=2");
?>