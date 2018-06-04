<html>
	<head>
		<title>Modificar Clientes</title>
		<?php include("cnds.php"); ?>
	</head>
	<body>
	<?php include ("menu.php"); ?>
	<div class="jumbotron text-center lmbot">
		<h1>Modificar de Clientes</h1>
	</div>
	<?php
		$conexion = mysqli_connect("localhost","root","","tienda") or die("Error BBDD");
		$dni= $_REQUEST['dni'];
		$registro = mysqli_query($conexion, "select * from clientes where dni='$dni'") or die("Error");
		$reg=mysqli_fetch_array($registro);		
	?>
	<div class="container-fluid bg-light sep">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 text-center">
				<form method="get" action="modificar_clientes.php"><!--enviar al formulario de modificacion -->
					<div class="form-group text-left">
						<label for="dni">DNI Cliente</label>
						<input type="text" class="form-control" id="dni" name="dni" readonly value="<?php echo $reg['dni']; ?>">
					</div>
					<div class="form-group text-left">
						<label for="nombre">Nombre del Cliente</label>
						<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $reg['nombre'];?>">
					</div>
					<div class="form-group text-left">
						<label for="poblacion">Población</label>
						<input type="text" class="form-control" id="poblacion" name="poblacion" value="<?php echo $reg['poblacion'];?>">
					</div>
					<div class="form-group text-left">
						<label for="cantidad">Provincia</label>
						<input type="text" class="form-control" id="provinia" name="provincia" value="<?php echo $reg['provincia'];?>">
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