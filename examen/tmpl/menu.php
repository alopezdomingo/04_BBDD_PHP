<?php 
echo '
<!-- MENU -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="img/webicon.png">&nbsp;INICIO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="./listado.php">LISTADO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./fAlta.php">ALTA</a>
        </li>
        
      </ul>
      <!-- ACCESO CUENTA -->
       	<ul class="nav navbar-nav navbar-right">          
		      <li class="nav-item"><a class="nav-link" href="fLogin.php"><i class="fas fa-user"></i> Acceder</a></li>
		    </ul>
	<!-- FIN ACCESO CUENTA -->	
    </div>
  </nav>
	<!-- fin del menu -->'
	; ?>