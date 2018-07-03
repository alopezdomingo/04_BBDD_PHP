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
		<div class="jumbotron text-center py-4"><h1>Listado</h1></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
					<?php   
					if (isset ($_REQUEST['control']))
					{
						$cartel = $_REQUEST['control'];
						if ($cartel==1){
						?>
						<p class="alert alert-success">Alta realizada con éxito</p>
						<?php
						}
						else if ($cartel==2)
							{
							?>
							<p class="alert alert-danger">Producto eliminado</p>
						<?php
							}
						else {
							?>
							<p class="alert alert-secondary">Producto modificado correctamente</p>
							<?php
							}
					}
					?>
					
				</div>
				<div class="col-md-6 text-right"><p class="alert alert-light"><a class="alert-link" href="fAlta.php">Añade mas productos</a> </p></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php
					$registros = mysqli_query($conexion,"select * from productos") or die("Error al realizar la consulta");
				?>

				<table class="table table-striped table-light text-center">
			  <thead class="">
				<tr>
				  <th>Código</th>
				  <th>Nombre</th>
				  <th>Categoría</th>
				  <th>Cantidad</th>
				  <th>Precio</th>
				  <th>Modificar</th>
				  <th>Eliminar</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php while ($reg=mysqli_fetch_array($registros))
			  {
				  ?>
				<tr>
				  <th><?php echo $reg['codigo'];?></th>
				  <td><?php echo $reg['nombre'];?></td>
				  <td><?php echo $reg['categoria'];?></td>
				  <td><?php echo $reg['cantidad'];?></td>
				  <td><?php echo $reg['precio'];?>&nbsp;€</td>
				  <td><a href="fModificar.php?codigo=<?php echo $reg['codigo'];?>"><i class="fas green fa-edit"></i></a></td>
				  <td><a href="eliminar.php?cod=<?php echo $reg['codigo'];?>"><i class="fas green fa-trash-alt"></i></a></td>
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
	<?php include("tmpl/footer.php"); ?>
</body>
</html>