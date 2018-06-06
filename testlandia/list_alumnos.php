<!DOCTYPE html>
<html lang="es">
<head>
	<title>Alumnos | TESTLANDIA</title>
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
				<h3 class="text-center mtop">Alumnos registrados</h3>
				<!-- mensajes -->
				<div class="col-sm-6 text-left">
					<?php   
					if (isset ($_REQUEST['control']))
					{
						$cartel = $_REQUEST['control'];
						if ($cartel==1){
						?>
						<p class="text-info">Alumno añadido</p>
						<?php
						}
						else if ($cartel==2)
							{
							?>
							<p class="text-danger">Alumno eliminado</p>
						<?php
							}
						else {
							?>
							<p class="alert alert-warning">Alumno modificado correctamente</p>
							<?php
							}
					}
					?>
				</div>
				<!-- BBDD -->
				<?php
					$conexion = mysqli_connect("localhost","root","","testlandia") or die("Error al conectar con la base de datos");
					$registros = mysqli_query($conexion,"select * from usuarios where tipo=2") or die("Error al realizar la consulta");
				?>
				<!-- TABLA CON RESULTADOS -->
				<table class="table table-striped table-light text-center">
					  <thead class="">
						<tr>
						  <th>Nombre</th>
						  <th>Modificar</th>
						  <th>Eliminar</th>
						</tr>
					  </thead>
					  <tbody>
					  <?php while ($reg=mysqli_fetch_array($registros))
					  {
						  ?>
						<tr>
						  <th><?php echo utf8_encode($reg['nombre']);?></th>
						  <td><a href="fModificar_producto.php?nombre=<?php echo $reg['nombre'];?>"><i class="fas green fa-edit"></i></a></td>
						  <td><a href="eliminar_productos.php?nombre=<?php echo $reg['nombre'];?>"><i class="fas green fa-trash-alt"></i></a></td>
						</tr>
						<?php
					  }
					  mysqli_close($conexion);
						?>
					  </tbody>
			</table>
			</div>
		</div>
	</div>
	<!-- FOOTER -->
	<br><br><br>
	<?php include("tmpl/footer.php"); ?>
</body>
</html>