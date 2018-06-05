<?php 
	$conexion=mysqli_connect("localhost","root","","testlandia") or die ("Error al conectar a la base de datos");

	$pregunta = $_REQUEST['pregunta'];
	$r1= $_REQUEST['r1'];
	$r2= $_REQUEST['r2'];
	$r3= $_REQUEST['r3'];
	$rcorrecta= $_REQUEST['rcorrecta'];
	$categoria= $_REQUEST['categoria'];

	mysqli_query($conexion,"insert into preguntas(pregunta,r1,r2,r3,rcorrecta, categoria) values ('$pregunta','$r1','$r2','$r3','$rcorrecta', '$categoria')") or die ("La pregunta NO ha sido dada de alta en la BBDD");

	mysqli_close($conexion);

	header("location:list_preguntas.php?control=1");

 ?>