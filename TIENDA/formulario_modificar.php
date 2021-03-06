<html>
	<head>
		<title>Modificar Producto</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</head>
	<body>
	<div class="jumbotron text-center">
		<h1>Modificar Producto</h1>
	</div>
	<?php
		$conexion = mysqli_connect("localhost","root","","tienda") or die("Error BBDD");
		$codigo= $_REQUEST['codigo'];
		$registro = mysqli_query($conexion, "select * from productos where codigo=$codigo") or die("Error");
		$reg=mysqli_fetch_array($registro);		
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 text-center">
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
	</div>
	<footer>Ana López</footer>
	</body>
</html>