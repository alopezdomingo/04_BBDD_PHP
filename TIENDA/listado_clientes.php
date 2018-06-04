<html>
	<head>
		<title>Listado de Clientes</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="jumbotron text-center">
			<h1>Listado de Clientes</h1>
		</div>
		<div class="container">
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
							<p class="text-danger">Cliente eliminado</p>
						<?php
							}
							else if ($cartel==3){
								?>
							<p class="text-danger">DNI duplicado. Inténtelo de nuevo.</p>
								<?php
							}
						else {
							?>
							<p class="alert alert-warning">Cliente modificado correctamente</p>
							<?php
							}
					}
					?>
					
				</div>

<!---- --->				
				<div class="col-sm-6 text-right">
					<a href="fAlta_clientes.php" class="btn btn-primary">Añadir cliente</a>
					<a href="index.php" class="btn btn-secondary">Volver al panel de Gestión</a>
				</div>
			</div>
<!---- --->
		</div>
<!-- FIN DEL --->
		
		<?php
			$conexion = mysqli_connect("localhost","root","","tienda") or die("Error al conectar con la base de datos");
			$registros = mysqli_query($conexion,"select * from clientes") or die("Error al realizar la consulta");
		?>
		<div class="container">
			<table class="table table-striped text-center">
			  <thead class="thead-dark">
				<tr>
				  <th>DNI</th>
				  <th>Nombre</th>
				  <th>Provincia</th>
				  <th>Población</th>
				  <th>Modificar</th>
				  <th>Eliminar</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php while ($reg=mysqli_fetch_array($registros))
			  {
				  ?>
				<tr>
				  <th><?php echo $reg['dni'];?></th>
				  <td><?php echo $reg['nombre'];?></td>
				  <td><?php echo $reg['provincia'];?></td>
				  <td><?php echo $reg['poblacion'];?></td>
				  <td><a href="fModificar_clientes.php?dni=<?php echo $reg['dni'];?>"><i class="fas fa-edit"></i></a></td>
				  <td><a href="eliminar_clientes.php?dni=<?php echo $reg['dni'];?>"><i class="fas fa-trash-alt"></i></a></td>
				</tr>
				<?php
			  }
			  mysqli_close($conexion);
				?>
			  </tbody>
			</table>
		</div>
		<footer>Ana López</footer>
	</body>
</html>