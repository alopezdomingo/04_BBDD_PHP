<?php 
	$conexion = mysqli_connect("localhost", "root","", "megaprueba");

	$destinoUsu ="Marruecos";
	
	$registros = mysqli_query($conexion, "select * from todoViajes where destino='Marruecos'") or die (mysqli_error($conexion));




	while ($reg = mysqli_fetch_array($registros)) {
		echo "Código: ".$reg['codViaje'] ."<br>";
		echo "Destino: ".$reg['destino'] ."<br>";
		echo "Precio: ".$reg['precio'] ."<br>";
		echo "idDestino: ".$reg['idDestino'] ."<br>";
		echo "Lugar: ".$reg['lugar'] ."<br>";
		echo "Zona: ".$reg['zona'] ."<br>";
		echo "<br>";
	}

	mysqli_close($conexion)
 ?>