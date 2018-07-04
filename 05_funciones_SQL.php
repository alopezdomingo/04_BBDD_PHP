<?php 
	$conexion = mysqli_connect("localhost", "root","", "megaprueba");
	
	$registros = mysqli_query($conexion, "select destino, precio, tipoViaje(precio) as tipo from megapueba") or die (mysqli_error($conexion));

	while ($reg = mysqli_fetch_array($registros)) {
		echo "Destino: ".$reg['destino'] ."<br>";
		echo "Precio: ".$reg['precio'] ."<br>";
		echo "Tipo de viaje: ".$reg['tipo'] ."<br>";
		echo "<br>";
	}

	mysqli_close($conexion)
 ?>