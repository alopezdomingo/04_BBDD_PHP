<?php 
	include("conexion.php");

	$registros = mysqli_query($conexion, "select DISTINCT(categoria) from productos") or die ("Error al conectar en la BBDD");

	while ($reg=mysqli_fetch_array($registros)) {
		echo $reg['categoria']."<br>";
	}
	mysqli_close($conexion);
 ?>