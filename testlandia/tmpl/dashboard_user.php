<?php 
echo '<div class="nav-side-menu">
    <div class="brand rob"><img src="img/icon.png">&nbsp;&nbsp;Testlandia</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="#">Panel del alumno</a></li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-user fa-lg"></i>&nbsp;&nbsp; Mi cuenta de usuario <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="#">Ver cuenta</a></li>
                    <li><a href="#">Modificar datos</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fas fa-book fa-lg"></i>&nbsp;&nbsp; Test <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li>Nuevo test aleatorio</li>
                  <li>New Service 2</li>
                  <li>New Service 3</li>
                </ul>


               
            </ul>
     </div>
</div>'; ?>