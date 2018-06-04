<!DOCTYPE html>
<html lang="es">
<head>
	<title>Document</title>
	<?php include("cnds.php"); ?>
</head>
<body>
	<!-- MENU -->
	<?php include("menu.php"); ?>
		<div class="container">
			<div class="row">
				<form>
					<p>Categoría</p>
					<select name="cat">
						<?php 

						include("conexion.php");

						$registros = mysqli_query($conexion, "select distinct(provincia) from provincia order by provincia") or die ("Error al conectar en la BBDD");

							while ($reg=mysqli_fetch_array($registros)) {
						 ?>
						<option><?php echo utf8_encode($reg['provincia']) ?></option>
					<?php
					 }
					 mysqli_close($conexion);
					 ?>
					</select>
				</form>
			</div>
		</div>
	<!-- FOOTER -->
	<br><br><br>
	<?php include("footer.php"); ?>
</body>
</html>