<?php 
	if (isset($_REQUEST['valor']))
	{
		$inicio=$_REQUEST['valor'];
	}
	else
	{
		$inicio=0;
	}
	$conexion=mysqli_connect("localhost","root","","tienda") or die("Error al conectar");
	
	$registros=mysqli_query($conexion,"select * from productos") or die ("error al realizar consulta");

	echo "<b style='font-size:28px'>Hay ". mysqli_num_rows($registros)." productos </b><br>";
	
	$pagsTotal = mysqli_num_rows($registros);
	
	$registros=mysqli_query($conexion,"select * from productos limit $inicio,3") or die ("error al realizar consulta");
	$control = $inicio + 3;

	while($reg = mysqli_fetch_array($registros))
	{
		echo $reg['codigo']."<br>";
		echo $reg['nombre']."<br>";
		echo $reg['categoria']."<br>";
		echo $reg['precio']."<br>";
		echo $reg['cantidad']."<br>";
		echo "<hr>";
	}
	mysqli_close($conexion);
	
	if ($inicio==0)
	{
		echo " Anterior ";
	}
	else
	{
		$anterior=$inicio-3;
		echo " <a href=\"paginado.php?valor=$anterior\"> Anterior</a> ";
	}
	
	$paginas=ceil($pagsTotal/3);
	$paginasS=5;

	for ($i=0; $i < $paginasS ; $i++) { 
		$valor=$i*3;
		$numero=$i+1;
		echo "<a href=\"paginado.php?valor=$valor\"> $numero</a>";
	}
	if ($control<$pagsTotal)
	{
		$siguiente=$inicio+3;
		echo " <a href=\"paginado.php?valor=$siguiente\"> Siguiente</a> ";
	}
	else
	{
		echo " Siguiente ";
	}
	


 ?>