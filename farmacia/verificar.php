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
$registro=mysqli_query($conexion,"select nombre from usuarios where nombre='$user' and contra='$encriptada'") 
or die ("Error de login");

//Contamos los registros que genera esa consulta
$cantidad=mysqli_num_rows($registro);

//Si la cantidad de registros es igual a 1, establecemos la sesion con el usuario introducido
if($cantidad == 1){
	$_SESSION['nombre']=$user;
	mysqli_close($conexion);
	header("location:indexUsuario.php");

				if(($_SESSION['nombre']=='admin')){
					header("location:indexAdmin.php");
				}
		
} 
//De lo contrario, cerramos la conexion y volvemos al login 
else{
	mysqli_close($conexion);
	header("location:acceder.php?control=1");
}
?>