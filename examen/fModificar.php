<!DOCTYPE html>
<html lang="es">
<head>
	<title>ANA LÓPEZ | EXAMEN</title>
	<?php include("tmpl/cnds.php"); ?>
	<?php include("tmpl/style.php"); ?>
	<?php include("tmpl/conexion.php"); ?>
</head>
<body>
	<?php include("tmpl/menu.php"); ?>
	<div class="container-fluid px-0">
		<div class="jumbotron text-center py-4"><h1>Modificar</h1></div>
	</div>
	<div class="container">
		<?php
		$codigo= $_REQUEST['codigo'];
		$registro = mysqli_query($conexion, "select * from productos where codigo=$codigo") or die("Error");
		$reg=mysqli_fetch_array($registro);		
	?>
		<div class="row">
			<div class="col-md-6 offset-3 text-center">
				<form method="get" action="modificar.php">
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
	</div><br><br><br>
	<!-- FOOTER -->
	<?php include("tmpl/footer.php"); ?>
</body>
</html>