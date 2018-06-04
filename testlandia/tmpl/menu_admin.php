<?php 
echo '
<!-- MENU -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/testlandia/index_admin.php"> </a>
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