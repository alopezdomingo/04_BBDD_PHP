<?php
	$conexion = mysqli_connect("localhost","root","","tienda") or die("Error al conectar con la base de datos");
	
	$registros = mysqli_query($conexion,"select * from productos") or die("Error al realizar la consulta");

	while ($reg=mysqli_fetch_array($registros))
	{
		echo "Codigo: " .$reg['codigo'] . "<br>";
		echo "Nombre: " .$reg['nombre'] . "<br>";
		echo "Categoría: " .$reg['categoria'] . "<br>";
		echo "Cantidad: " .$reg['cantidad'] . "<br>";
		echo "Precio: " .$reg['precio'] . "<br>";
		echo "<hr>";
	}

?>