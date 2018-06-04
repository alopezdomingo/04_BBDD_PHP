	<!DOCTYPE html>
<html lang="es">
<head>
	<title>Alta de Usuarios</title>
	<?php include("cnds.php"); ?>
</head>
<body>
	<?php include ("menu.php"); ?>
	<div class="jumbotron text-center lmbot">
		<h1>Alta de Usuario</h1>
	</div>
	<!-- ------------- -->
	<div class="container-fluid bg-light sep">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<form method="post" action="alta_usuarios.php"><!-- post: datos no visuales -->
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
							<option value="1">Administrador</option>
							<option value="2">Invitado</option>
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
	<?php include ('footer.php'); ?>
</body>
</html>