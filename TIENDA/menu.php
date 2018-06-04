<?php 
echo '
<!-- MENU -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="http://localhost/TIENDA/index.php"><i class="fas fa-shopping-bag"></i>&nbsp;Tienda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/TIENDA/index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/TIENDA/servicios.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/TIENDA/listado_way.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/TIENDA/quienes.php">¿Quienes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/TIENDA/listado_clientes.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">####</a>
        </li>
      </ul>
      <!-- ACCESO CUENTA -->
       	<ul class="nav navbar-nav navbar-right">
		      <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user"></i> Acceder</a></li>
		      <li class="nav-item"><a class="nav-link" href="http://localhost/TIENDA/fAlta_usuarios.php"><i class="fas fa-sign-out-alt"></i>Registro</a></li>
		</ul>
	<!-- FIN ACCESO CUENTA -->	
    </div>
  </nav>
	<!-- fin del menu -->'
	; ?>