<?php 
echo '
<!-- MENU -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/testlandia/index.php"><img src="img/icon.png">&nbsp;Testlandia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/testlandia/index_user.php">Inicio</a>
        </li>
                 
      </ul>
      <!-- ACCESO CUENTA -->
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a class="nav-link green">Bienvenido/a '.$_SESSION['nombre'].' </a></li>
          <li class="nav-item"><a class="nav-link" href="http://localhost/testlandia/tmpl/salir.php"><i class="fas fa-window-close"></i> Salir</a></li>
        </ul>
  <!-- FIN ACCESO CUENTA -->  
    </div>
  </nav>
	<!-- fin del menu -->'
	; ?>