<?php 
	include("conexion.php");

	$registros = mysqli_query($conexion, "select * from productos") or die (mysqli_error($conexion));

	while ($reg=mysqli_fetch_array($registros)) {
		# code...
		echo $reg['codigo']."<br>";
		echo $reg['nombre']."<br>";
		echo $reg['cantidad']."<br>";
		echo $reg['precio']."&nbsp;€"."<br>";
		// echo $reg['imagen']."<br>";
		//echo "<img src="".$reg['imagen']"">."."<br>";
		echo "<img src=".$reg['imagen']."><br>";
		echo $reg['descripcion']."<br>";
		echo "<br><hr>";
	}
 ?>