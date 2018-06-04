<?php 
echo '
<!-- MENU -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/farmacia/indexAdmin.php"><img src="img/logo.png">&nbsp;Farmacia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/farmacia/listado_productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/farmacia/listado_clientes.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">####</a>
        </li>
      </ul>
      <!-- ACCESO CUENTA -->
       	<ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a class="nav-link green">Bienvenido '.$_SESSION['nombre'].' </a></li>
		      <li class="nav-item"><a class="nav-link" href="http://localhost/farmacia/salir.php"><i class="fas fa-window-close"></i> Salir</a></li>
		    </ul>
	<!-- FIN ACCESO CUENTA -->	
    </div>
  </nav>
	<!-- fin del menu -->'
	; ?>