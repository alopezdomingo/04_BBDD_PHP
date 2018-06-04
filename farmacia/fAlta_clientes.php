<html>
	<head>
		<title>Alta de Clientes</title>
		<?php include("cnds.php"); ?>
	</head>
	<body>
	<?php include ("menu.php"); ?>
	<div class="jumbotron text-center lmbot">
		<h1>Alta de Clientes</h1>
	</div>
	<div class="container-fluid bg-light sep">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 text-center">
				<form method="get" action="alta_clientes.php">
					<div class="form-group text-left">
						<label for="dni">DNI</label>
						<input type="text" class="form-control" id="dni" name="dni">
					</div>
					<div class="form-group text-left">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre">
					</div>
					<div class="form-group text-left">
						<label for="provincia">Provincia</label>
						<input type="text" class="form-control" id="provincia" name="provincia">
					</div>
					<div class="form-group text-left">
						<label for="poblacion">Poblacion</label>
						<input type="text" class="form-control" id="poblacion" name="poblacion">
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