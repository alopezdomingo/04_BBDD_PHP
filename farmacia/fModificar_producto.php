<html>
	<head>
		<title>Modificar Producto</title>
		<?php include("cnds.php"); ?>
	</head>
	<body>
	<?php include ("menu.php"); ?>
	<div class="jumbotron text-center lmbot">
		<h1>Modificar de Productos</h1>
	</div>
	<?php
		$conexion = mysqli_connect("localhost","root","","tienda") or die("Error BBDD");
		$codigo= $_REQUEST['codigo'];
		$registro = mysqli_query($conexion, "select * from productos where codigo=$codigo") or die("Error");
		$reg=mysqli_fetch_array($registro);		
	?>
	<div class="container-fluid bg-light sep">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 text-center">
				<form method="get" action="modificar_productos.php">
					<div class="form-group text-left">
						<label for="codigo">Código del producto</label>
						<input type="text" class="form-control" id="codigo" name="codigo" readonly value="<?php echo $reg['codigo']; ?>">
					</div>
					<div class="form-group text-left">
						<label for="nombre">Nombre del Producto</label>
						<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $reg['nombre'];?>">
					</div>
					<div class="form-group text-left">
						<label for="categoria">Categoría</label>
						<input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $reg['categoria'];?>">
					</div>
					<div class="form-group text-left">
						<label for="cantidad">Cantidad</label>
						<input type="number" class="form-control" id="cantidad" name="cantidad" value="<?php echo $reg['cantidad'];?>">
					</div>
					<div class="form-group text-left">
						<label for="precio">Precio</label>
						<input type="number" class="form-control" id="precio" name="precio" value="<?php echo $reg['precio'];?>">
					</div>
					<div class="form-group text-center">
						<button type="submit" title="Guardar" class="btn btn-primary"><i class="far fa-save"></i> Guardar</button>
						<button type="reset" title="Cancelar" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<footer>Ana López</footer>
	</body>
</html>