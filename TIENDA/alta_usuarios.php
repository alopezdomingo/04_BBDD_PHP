<?php 
	include ("conexion.php");

	$u=$_REQUEST['user'];
	$c=$_REQUEST['pass'];
	$t=$_REQUEST['type'];

	$cifrada=md5($c);

	$registros = mysqli_query($conexion, "select nombre from usuarios where nombre ='$u'") or die ("error al insertar usuario");
	$resultados = mysqli_num_rows($registros);

	if ($resultados==0){
		mysqli_query($conexion, "insert into usuarios (nombre, contra, tipo) values ('$u', '$cifrada', $t)") or die ("Error al realizar el alta");
		echo "Alta realizada";
	}else {
		# code...
		echo "Este usuario ya existe";
	}

	

	mysqli_close($conexion);
 ?>