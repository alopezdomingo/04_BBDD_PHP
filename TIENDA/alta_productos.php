<?php 
	/* echo $_FILES ['imagen'] ['name'];
	echo $_FILES ['imagen'] ['size'];
	echo $_FILES ['imagen'] ['type']; */
	$identificador = time();
	$nombrearchivo = $_FILES ['imagen']['name'];
	$temporal = $_FILES ['imagen']['tmp_name']; //ruta de los archivos temporales del servidor
	$destino = "uploads/".$identificador.$nombrearchivo;
	// echo $destino;
	copy($temporal, $destino);

	$nombre= $_REQUEST ['nombre'];
	$categoria = $_REQUEST['categoria'];
	$precio=  $_REQUEST ['precio'];
	$cantidad= $_REQUEST['cantidad'];
	$descripcion=$_REQUEST['descripcion'];

	include("conexion.php");

	mysqli_query($conexion, "insert into productos (nombre, categoria, cantidad, precio, imagen, descripcion) values ('$nombre','$categoria', $cantidad, $precio, '$destino', '$descripcion')") or die (mysqli_error($conexion));
	mysqli_close($conexion);
	header("location:listado_productos.php");
 ?>