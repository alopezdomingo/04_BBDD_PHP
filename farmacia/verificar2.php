<?php
//Se inicia la sesion
session_start();

//Conectamos a la base de datos
include("conexion.php");

//Establecemos las variables para el usuario y la contraseña recogidos de la página del login
//mysqli_real_escape_string formatea las string para eliminar caracteres especiales
$user=mysqli_real_escape_string($conexion,$_REQUEST['user']);
$pass=mysqli_real_escape_string($conexion,$_REQUEST['pass']);


//Encriptamos la contraseña con md5
$encriptada=md5($pass);

//Establecemos la consulta para comprobar si el usuario introducido existe en la base de datos
$registro=mysqli_query($conexion,"select nombre, tipo from usuarios where nombre='$user' and contra='$encriptada'") 
or die ("Error de login");

//Contamos los registros que genera esa consulta
$cantidad=mysqli_num_rows($registro);

//inicio administrador
if($cantidad == 1){
	$reg=mysqli_fetch_array($registro);
	$_SESSION['nombre']=$user;
	$_SESSION['tipo']=$reg['tipo'];
	mysqli_close($conexion);
	
	if ($reg['tipo']==1)
	{
		header("location:indexAdmin.php");
	}
	else
	{
		header("location:indexUsuario.php");	
	}
} 

//De lo contrario, cerramos la conexion y volvemos al login 
else{
	mysqli_close($conexion);
	header("location:acceder.php?control=1");
}
?>