<?php 

    session_start();
    if(!isset($_SESSION['nombre']))
    {
      header("location:index.php?mensaje=1");
    }
    else
    {}

 ?>