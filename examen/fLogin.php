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
		<div class="jumbotron text-center py-4"><h1>Accede a tu cuenta</h1></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<form method="post" action="login.php">
					<div class="form-group">
						<label for="email">eMail</label>
						<input type="text" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="pass">Contraseña</label>
						<input type="password" class="form-control" id="pass" name="pass" >
					</div>
				
					<div class="form-group text-center">
						<button type="submit" title="Guardar" class="btn btn-success"><i class="far fa-hand-pointer"></i> Entrar </button>
					</div>

					<div class="form-group text-center text-light">
						<label for="recordatorio">usuario@usuario.com</label><br>
						<label for="recordatorio2">usuario</label>
					</div>
				</form>
			</div>
			<div class="col-md-12 text-left">
					<?php   
					if (isset ($_REQUEST['control']))
					{
						$cartel = $_REQUEST['control'];
						if ($cartel==1){
						?>
						<p class="alert alert-danger text-center">El usuario/contraseña NO se encuentra en la BBDD</p>
						<?php
						}
					}
					?>
					
				</div>
		</div>
	</div><br><br><br>
	<!-- FOOTER -->
	<?php include("tmpl/footer.php"); ?>
</body>
</html>