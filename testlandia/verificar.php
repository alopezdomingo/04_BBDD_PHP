<?php
//Se inicia la sesion
session_start();

//Conectamos a la base de datos
include("tmpl/conexion.php");

//Establecemos las variables para el usuario y la contraseña recogidos de la página del login
//mysqli_real_escape_string formatea las string para eliminar caracteres especiales
$user=mysqli_real_escape_string($conexion,$_REQUEST['user']);
$pass=mysqli_real_escape_string($conexion,$_REQUEST['pass']);


//Encriptamos la contraseña con md5
$encriptada=md5($pass);

//Establecemos la consulta para comprobar si el usuario introducido existe en la base de datos
$registro=mysqli_query($conexion,"select nombre, tipo from usuarios where nombre='$user' and pass='$encriptada'") 
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
		header("location:index_admin.php");
	}
	else
	{
		header("location:index_user.php");	
	}
} 

//De lo contrario, cerramos la conexion y volvemos al login 
else{
	mysqli_close($conexion);
	header("location:access.php?control=1");
}
?>