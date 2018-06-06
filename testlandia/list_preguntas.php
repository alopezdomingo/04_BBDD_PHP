<!DOCTYPE html>
<html lang="es">
<head>
	<title>Preguntas disponibles | TESTLANDIA</title>
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
				<h3 class="text-center mtop">Preguntas disponibles</h3>
				<!-- mensajes -->
				<div class="col-sm-8 offset-1 text-left">
					<?php   
					if (isset ($_REQUEST['control']))
					{
						$cartel = $_REQUEST['control'];
						if ($cartel==1){
						?>
						<p class="text-info">Pregunta añadida</p>
						<?php
						}
						else if ($cartel==2)
							{
							?>
							<p class="text-danger">Pregunta eliminada</p>
						<?php
							}
						else {
							?>
							<p class="alert alert-warning">Pregunta modificada correctamente</p>
							<?php
							}
					}
					?>
				</div>
				<!-- BBDD -->
				<?php
					$conexion = mysqli_connect("localhost","root","","testlandia") or die("Error al conectar con la base de datos");
					$registros = mysqli_query($conexion,"select * from preguntas") or die("Error al realizar la consulta");
				?>
				<!-- TABLA CON RESULTADOS -->
				<table class="table table-striped table-light">
					  <thead class="">
						<tr>
						  <th>id</th>
						  <th width="30%">Pregunta</th>
						  <th width="15%">Correcta</th>
						  <th width="15%">Opción 1</th>
						  <th width="15%">Opción 2</th>
						  <th width="15%">Opción 3</th>
						  <th>Modificar</th>
						  <th>Eliminar</th>
						</tr>
					  </thead>
					  <tbody>
					  <?php while ($reg=mysqli_fetch_array($registros))
					  {
						  ?>
						<tr>
						  <td><?php echo $reg['id'];?></td>
						  <td width="30%"><?php echo utf8_encode($reg['pregunta']);?></td>
						  <td class="text-success"><?php echo utf8_encode($reg['rcorrecta']);?></td>
						  <td><?php echo utf8_encode($reg['r1']);?></td>
						  <td><?php echo utf8_encode($reg['r2']);?></td>
						  <td><?php echo utf8_encode($reg['r3']);?></td>
						  <td class="text-center"><a href="fModificar_preguntas.php?id=<?php echo $reg['id'];?>"><i class="fas green fa-edit"></i></a></td>
						  <td class="text-center"><a href="eliminar_preguntas.php?id=<?php echo $reg['id'];?>"><i class="fas green fa-trash-alt"></i></a></td>
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