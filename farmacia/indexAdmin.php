	<!DOCTYPE html>
<html lang="es">
<head>
	<title>Farmacia</title>
	<?php include("cnds.php"); ?>
      <?php include("sesion.php"); ?> 
</head>
<body>
		<?php include("menuAdmin.php"); ?>
      <div class="adminbg container-fluid">
      	<div class="container-fluid">
      		
                  <div class="col-lg-12">
                        <br><br><br>
                        <div class="row">
                              <div class="col-md-4 bg-white">
                                    <center>
                                    <a href=http://localhost/farmacia/listado_productos.php>
                                          <img src="img/trolley.png">
                                          <h3>Productos</h3>
                                    </a>
                                    </center>
                              </div>
                              <div class="col-md-4 bg-white">
                                    <center>
                                    <a href="#">
                                          <img src="img/meeting.png">
                                          <h3>Usuarios</h3>
                                    </a>
                                    </center>
                              </div>
                              <div class="col-md-4 bg-white">
                                    <center>
                                    <a href="http://localhost/farmacia/listado_clientes.php">
                                          <img src="img/handshake.png">
                                          <h3>Clientes</h3>
                                    </a>
                                    </center>
                              </div>

                        </div>
                  </div>
      	</div>
      </div>
    
 	
   
	<?php include("footer.php"); ?>
</body>
</html>