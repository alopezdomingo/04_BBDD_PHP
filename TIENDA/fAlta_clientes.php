<html>
	<head>
		<title>Alta de Clientes</title>
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
		<h1>Alta de Clientes</h1>
	</div>
	<div class="container">
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
	<br><br><br><br>
	<footer>Ana López</footer>
	</body>
</html>