<html>
	<head>
		<title>Listado de Productos</title>
		<?php include("cnds.php"); ?>
		 <?php include("sesion.php"); ?> 
	</head>
	<body>
		<?php include("menuAdmin.php"); ?>
		<div class="jumbotron text-center lmbot">
			<h1>Listado Productos</h1>
		</div>
		<div class="container-fluid bg-light">
			<div class="row">
				<div class="col-sm-6 text-left">
					<?php   
					if (isset ($_REQUEST['control']))
					{
						$cartel = $_REQUEST['control'];
						if ($cartel==1){
						?>
						<p class="text-info">Alta realizada con éxito</p>
						<?php
						}
						else if ($cartel==2)
							{
							?>
							<p class="text-danger">Producto eliminado</p>
						<?php
							}
						else {
							?>
							<p class="alert alert-warning">Producto modificado correctamente</p>
							<?php
							}
					}
					?>
					
				</div>

<!---- ---->				
				<div class="col-sm-6 text-right esp">
					<a href="fAlta_productos.php" class="btn btn-primary">Nuevo producto</a>
					<a href="indexAdmin.php" class="btn btn-secondary">Volver al panel de Gestión</a>
				</div>
			</div>
<!---- ---->
		</div>
<!--- FIN DEL ---->
		
		<?php
			$conexion = mysqli_connect("localhost","root","","tienda") or die("Error al conectar con la base de datos");
			$registros = mysqli_query($conexion,"select * from productos") or die("Error al realizar la consulta");
		?>
		<div class="container-fluid bg-light">
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
				  <td><a href="fModificar_producto.php?codigo=<?php echo $reg['codigo'];?>"><i class="fas green fa-edit"></i></a></td>
				  <td><a href="eliminar_productos.php?cod=<?php echo $reg['codigo'];?>"><i class="fas green fa-trash-alt"></i></a></td>
				</tr>
				<?php
			  }
			  mysqli_close($conexion);
				?>
			  </tbody>
			</table>
			<br><br><br><br><br><br>
		</div>
		<footer>Ana López</footer>
	</body>
</html>