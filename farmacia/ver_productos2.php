<!DOCTYPE html>
<html lang="es">
<head>
	<title>Productos</title>
	<?php include("cnds.php"); ?>
</head>
<body>
	<!-- MENU -->
	<?php include("menu.php"); ?>
	<div class="jumbotron text-center lmbot">
			<h1>Productos</h1>
	</div>
		<div class="container-fluid">
			<div class="row">
				<div class="container">
				<div class="col-md-3" style="border: 5px solid red">
					<?php 
						include("conexion.php");
						$registros= mysqli_query($conexion, "select * from productos") or die (mysqli_error($conexion));
						while ($reg=mysqli_fetch_array($registros)) {
						
					 ?>
					<div class="col-sm-6"><img class="imgpro" src="<?php echo $reg['imagen'] ?>"></div>
					<div class="col-sm-6">
						<table class="table table-condensed">
							<tr>
								<td><b>Nombre:</b></td>
								<td><?php echo $reg['nombre']; ?></td>
							</tr>
						</table>
					</div>
				<!-- FIN PHP -->
					<?php }
				mysqli_close($conexion) 
					?>
				</div>
				
			</div>
		</div>
	<!-- FOOTER -->
	<br><br><br>
	<?php include("footer.php"); ?>
</body>
</html>