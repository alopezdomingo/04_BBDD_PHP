<?php
	 $conexion=mysqli_connect("localhost","root","","tienda");
	 $nombre= "ProplusPack";
	 $categoria="Informática";
	 $cantidad=52;
	 $precio = 41.20;

	 mysql_query($conexion, "insert into productos (nombre, categoria, cantidad, precio) VALUES ('$nombre', '$categoria', '$cantidad', '$precio');") or die("No ha sido posible dar de alta");
	 echo "Alta realizada con éxito";
	
?>