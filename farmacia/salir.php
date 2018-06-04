<?php
session_start(); 
	   if(!isset($_SESSION['nombre']))
   		{
        echo "No hay ninguna sesion iniciada";
        header("location:index.php");
      }
 		  else{
        $_SESSION = array();
        session_regenerate_id(true);
        session_destroy();
        echo $_SESSION['nombre'];
        //echo "Has cerrado la sesion";
        echo "sesion cerrada";
        //header("location:index.php");
      }  
       
 ?>