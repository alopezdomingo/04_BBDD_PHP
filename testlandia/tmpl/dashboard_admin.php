<?php 
echo '<div class="nav-side-menu">
    <div class="brand rob"><img src="img/icon.png">&nbsp;&nbsp;Testlandia</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="#">Panel de Profesor</a></li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fas fa-graduation-cap fa-lg"></i>&nbsp;&nbsp; Mi cuenta de profesor <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="#">Ver cuenta</a></li>
                    <li><a href="#">Modificar mis datos</a></li>
                </ul>

                <li data-toggle="collapse" data-target="#preguntas" class="collapsed">
                  <a href="#"><i class="fas fa-book fa-lg"></i>&nbsp;&nbsp; Preguntas <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="preguntas">
                  <li>Ver preguntas</li>
                  <li>Añadir preguntas</li>
                </ul>
                
                <li data-toggle="collapse" data-target="#alumnos" class="collapsed">
                  <a href="#"><i class="fas fa-users fa-lg"></i>&nbsp;&nbsp; Alumnos <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="alumnos">
                  <li>Ver listado alumnos</li>
                </ul>

               
            </ul>
     </div>
</div>'; ?>