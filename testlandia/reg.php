	<!DOCTYPE html>
<html lang="es">
<head>
	<title>Regístrate</title>
	<?php include("tmpl/cnds.php"); ?>
	<?php include("tmpl/style.php"); ?>
</head>
<body>
	<?php include ("tmpl/menu.php"); ?>
	<div class="jumbotron text-center">
		<h1>Regístrate</h1>
	</div>
	<!-- ------------- -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 offset-sm-4">
				<form method="post" action="reg_alta.php"><!-- post: datos no visuales -->
					<div class="form-group">
						<label for="user">Usuario</label>
						<input type="text" class="form-control" id="user" name="user">
					</div>
					<div class="form-group">
						<label for="pass">Contraseña</label>
						<input type="password" class="form-control" id="pass" name="pass">
					</div>
					<div class="form-group">
						<label for="tipo">Tipo</label>
						<select class="form-control" id="type" name="type">
							<option value="2">Alumno</option>
						</select>
					</div>
					<div class="form-group text-center">
						<button type="submit" title="Guardar" class="btn btn-primary"><i class="far fa-save"></i> Guardar</button>
						<button type="reset" title="Cancelar" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include("tmpl/footer.php"); ?>
</body>
</html>