<!DOCTYPE html>
<html lang="es">
<head>
	<title>Alta de productos</title>
	<?php include("cnds.php"); ?>
</head>
<body>
	<!-- MENU -->
	<?php include("menu.php"); ?>
		<div class="container-fluid">
			<div class="row">
					<div class="col-md-3">&nbsp;</div>
					<div class="col-md-6">
						<form method="post" action="alta_productos.php" enctype="multipart/form-data">
							<br><br>
							<div class="form-group">
								<label style="width: 200px">Nombre del producto</label>
								<input type="text" name="nombre" id="nombre">
							</div>
							<div class="form-group">
								<label style="width: 200px">Categoría</label>
								<input type="text" name="categoria" id="categoria">
							</div>
							<div class="form-group">
								<label style="width: 200px">Cantidad</label>
								<input type="number" name="cantidad" id="cantidad">
							</div>
							<div class="form-group">
								<label></label>
								
							</div>
							<div class="form-group">
								<label style="width: 200px">Precio</label>
								<input type="number" name="precio" id="precio">
							</div>
							<div class="form-group">
								<label style="width: 200px">Descripcion</label>
								<textarea type="text" name="descripcion" id="descripcion" rows="5" cols="50"></textarea>
							</div>
							<div class="form-group">
								<label style="width: 200px">imagen</label>
								<input type="file" id="imagen" name="imagen">
							</div>
													
							<button type="submit">Alta</button>
						</form>
					</div>
					<div class="col-md-3">&nbsp;</div>
			</div>
		</div>
	<!-- FOOTER -->
	<br><br><br>
	<?php include("footer.php"); ?>
</body>  
</html>