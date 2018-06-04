<?php
session_start(); 
	   if(!isset($_SESSION['nombre']))
   		{
        echo "No hay ninguna sesion iniciada";
        header("location:http://localhost/testlandia/index.php");
      }
 		  else{
        $_SESSION = array();
        session_regenerate_id(true);
        session_destroy();
        header("location:http://localhost/testlandia/index.php");
      }  
       
 ?>