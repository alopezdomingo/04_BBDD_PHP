	<!DOCTYPE html>
<html lang="es">
<head>
	<title>Accede a tu cuenta</title>
	<?php include("tmpl/cnds.php"); ?>
	<?php include("tmpl/style.php"); ?>
</head>
<body>
	<?php include ("tmpl/menu.php"); ?>
	<div class="jumbotron">
		<h1>Acceso</h1>
	</div>
	<!-- ------------- -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 offset-sm-4">
				<form method="post" action="verificar.php">
					<div class="form-group">
						<label for="user">Usuario</label>
						<input type="text" class="form-control" id="user" name="user">
					</div>
					<div class="form-group">
						<label for="pass">Contraseña</label>
						<input type="password" class="form-control" id="pass" name="pass" >
					</div>
				
					<div class="form-group text-center">
						<button type="submit" title="Guardar" class="btn btn-success"><i class="far fa-hand-pointer"></i> Entrar </button>
					</div>
				</form>
			</div>
			<div class="col-md-6 offset-md-5">
				<?php   
					if (isset ($_REQUEST['control']))
					{
						$cartel = $_REQUEST['control'];
						if ($cartel==1){
						?>
						<p class="text-danger">Usuario / contraseña no válidos</p>
						<?php
						}
						
					}
					?>				
			</div>
		</div>
	</div>
	<?php include ('tmpl/footer.php'); ?>
</body>
</html>