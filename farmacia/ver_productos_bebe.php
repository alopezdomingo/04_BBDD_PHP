<!DOCTYPE html>
<html lang="es">
<head>
	<title>Productos de Bebé</title>
	<?php include("cnds.php"); ?>
</head>
<body>
	<!-- MENU -->
	 <?php
    session_start();
    if(!isset($_SESSION['nombre']))
    {
      header("location:patucasa.php?mensaje=1");
    }
    else
    {}
  ?>
	
	<?php include("menuUsuario.php"); ?>

	<div class="jumbotron text-center lmbot">
			<h1>Bebés</h1>
	</div>
	<!-- -->
	<div class="container-fluid bg-light">
			<div class="row">
				<?php 
						include("conexion.php");
						$registros= mysqli_query($conexion, "select * from productos where categoria LIKE 'Bebe' ") or die (mysqli_error($conexion));
						while ($reg=mysqli_fetch_array($registros)) {
						
					?>
				<div class="col-md-4 border">
						<div class="row listproductos">
						<div class="col-md-3 "><img class="imgpro" src="<?php echo $reg['imagen'] ?>"></div>
						<div class="col-md-9">
							<h3><?php echo $reg['nombre']; ?></h3>
							<table class="table table-condensed">
								<tr>
									<td>Categoría:</td>
									<td><?php echo $reg['categoria']; ?></td>
								</tr>
								<tr>
									<td>Descripción:</td>
									<td class="desc"><?php echo $reg['descripcion']; ?></td>
								</tr>
								<tr>
									<td>Código</td>
									<td><?php echo $reg['codigo']; ?></td>
								</tr>
							</table>
							</div>
								<div class="container-fluid">
									<center>
									<a href="#" class="btn btn-info"><i class="fa fa-eye"></i>&nbsp;Ver</a>
									<a href="#" class="btn btn-success"><i class="fas fa-shopping-cart"></i>&nbsp;Comprar</a>
									</center>
								</div>
							</div>
					</div>
					<!-- FIN PHP -->
					<?php }
					mysqli_close($conexion) 
					?>
			</div>
	</div>
	<!-- FOOTER -->
	<br><br><br>
	<?php include("footer.php"); ?>
</body>
</html>