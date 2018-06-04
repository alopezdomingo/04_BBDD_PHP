<!DOCTYPE html>
<html lang="es">
<head>
	<title>Document</title>
	<?php include("cnds.php"); ?>
</head>
<body>
	<!-- MENU -->
	<?php include("menu.php"); ?>
	<div class="container-fluid">
		<div class="jumbotron text-center">
				<h1>Listado de productos</h1>
			</div>
	</div>
		<div class="container-fluid">
		<!-- INICIO PHP -->
		<?php 
			include("conexion.php");
			$registros= mysqli_query($conexion, "select * from productos") or die (mysqli_error($conexion));
			while ($reg=mysqli_fetch_array($registros)) {
			
		 ?>
			
			<div class="container">
				<div class="row mb-4">
					<div class="col-sm-4 offset-sm-2"><img class="imgpro" src="<?php echo $reg['imagen'] ?>"></div>
					<div class="col-sm-4">
						<h3>Nombre del producto: <?php echo $reg['nombre']; ?></h3>
						<p>Categoría: <?php echo $reg['categoria']; ?></p>
						<p>Cantidad: <?php echo $reg['cantidad']; ?></p>
						<p>Descripcion: <?php echo $reg['descripcion']; ?></p>
						<p>Código: <?php echo $reg['codigo']; ?></p>
						<a href="#" class="btn btn-danger">Eliminar</a>
						<a href="#" class="btn btn-primary">Modificar</a>
					</div>
				</div>
			</div>
		<!-- FIN PHP -->
		<?php }
				mysqli_close($conexion) 
		?>
		</div>
	<!-- FOOTER -->
	<br><br><br>
	<?php include("footer.php"); ?>
</body>
</html>