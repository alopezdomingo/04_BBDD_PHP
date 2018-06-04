<?php
	$conexion=mysqli_connect("localhost","root","","tienda") or die ("Error al conectar a la base de datos");
	
	$dni = $_REQUEST['dni'];
	$nombre = $_REQUEST['nombre'];
	$provincia= $_REQUEST['provincia'];
	$poblacion = $_REQUEST['poblacion'];
	
	$registro = mysqli_query($conexion, "select * from clientes where dni='$dni'") or die (mysqli_error($conexion));/*reg es igual al valor de busqueda */
	$resultado = mysqli_num_rows($registro);/*contador de columnas de registro*/

	if ($resultado>0){
		echo "Este DNI ya está registrado";
		mysqli_close($conexion);
		header("location:listado_clientes.php?control=3");
	}else{
	mysqli_query($conexion,"insert into clientes(dni, nombre, provincia, poblacion) values ('$dni','$nombre', '$provincia', '$poblacion')") or die ("No ha sido posible registrar al cliente");
		
		mysqli_close($conexion);
		header("location:listado_clientes.php?control=1");
	}

	
?>