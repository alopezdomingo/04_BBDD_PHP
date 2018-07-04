<?php 
	$conexion = mysqli_connect("localhost", "root","", "viajes");
	$lug = $_REQUEST['lugar'];
	$cont = $_REQUEST['contienente'];

	mysqli_query($conexion, "call altaViajes ($lug, $cont)");
	
 ?>