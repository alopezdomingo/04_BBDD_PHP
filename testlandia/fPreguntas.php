<!DOCTYPE html>
<html lang="es">
<head>
	<title>Añadir preguntas | TESTLANDIA</title>
	<?php include("tmpl/cnds.php"); ?>
	<?php include("tmpl/style.php"); ?>
	<?php include("tmpl/sesion.php"); ?>
</head>
<body>
	<!-- MENU -->
	<?php include("tmpl/menu_admin.php"); ?>
	<?php include("tmpl/dashboard_admin.php"); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 offset-3">
				<h3 class="text-center mtop">Añade preguntas</h3>
				<div class="col-md-7 offset-2">
					<form method="get" action="alta_preguntas.php">
					<div class="form-group text-left">
						<label for="pregunta">Pregunta</label>
						<input type="text" class="form-control" id="dni" name="dni">
					</div>
					<div class="form-group text-left">
						<label for="r1">Primera respuesta</label>
						<input type="text" class="form-control" id="r1" name="r1">
					</div>
					<div class="form-group text-left">
						<label for="r1">Segunda respuesta</label>
						<input type="text" class="form-control" id="r2" name="r2">
					</div>
					<div class="form-group text-left">
						<label for="r1">Tercera respuesta</label>
						<input type="text" class="form-control" id="r3" name="r3">
					</div>
					<div class="form-group text-left">
						<label for="rcorrecta">Respuesta correcta</label>
						<input type="text" class="form-control" id="rcorrecta" name="rcorrecta">
					</div>
					<div class="form-group text-left">
						<label for="categoria">Categoría</label>
						<input type="text" class="form-control" id="categoria" name="categoria">
					</div>
					<div class="form-group text-center">
						<button type="submit" title="Guardar" class="btn btn-primary"><i class="far fa-save"></i> Guardar</button>
						<button type="reset" title="Cancelar" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	<!-- FOOTER -->
	<br><br><br>
	<?php include("tmpl/footer.php"); ?>
</body>
</html>