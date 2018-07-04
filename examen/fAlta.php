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
		<div class="jumbotron text-center py-4"><h1>Añade mas espadas</h1></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3 text-center">
				<form method="get" action="alta.php">
					<div class="form-group text-left">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre">
					</div>
					<div class="form-group text-left">
						<label for="precio">Precio</label>
						<input type="number" class="form-control" id="precio" name="precio">
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