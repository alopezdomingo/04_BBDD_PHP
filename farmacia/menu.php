<?php 
echo '
<!-- MENU -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/farmacia/index.php"><img src="img/logo.png">&nbsp;Farmacia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/farmacia/index.php">Inicio</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="http://localhost/farmacia/quienes.php">¿Quienes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/farmacia/servicios.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/farmacia/ver_productos_a.php">Productos</a>
        </li>
        
      </ul>
      <!-- ACCESO CUENTA -->
       	<ul class="nav navbar-nav navbar-right">
		      <li class="nav-item"><a class="nav-link" href="acceder.php"><i class="fas fa-user"></i> Acceder</a></li>
		    </ul>
	<!-- FIN ACCESO CUENTA -->	
    </div>
  </nav>
	<!-- fin del menu -->'
	; ?>