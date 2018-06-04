<?php 

    session_start();
    if(!isset($_SESSION['nombre']))
    {
      header("location:patucasa.php?mensaje=1");
    }
    else
    {}

 ?>