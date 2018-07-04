<?php
//Se inicia la sesion
session_start();

//Conectamos a la base de datos
$conexion=mysqli_connect("localhost","root","","espadas") or die ("Error al conectar a la base de datos");

//Establecemos las variables para el usuario y la contraseña recogidos de la página del login
//mysqli_real_escape_string formatea las string para eliminar caracteres especiales
$email=mysqli_real_escape_string($conexion,$_REQUEST['email']);
$pass=mysqli_real_escape_string($conexion,$_REQUEST['pass']);


//Encriptamos la contraseña con md5
$encriptada=md5($pass);

//Establecemos la consulta para comprobar si el usuario introducido existe en la base de datos
$registro=mysqli_query($conexion,"select email from clientes where email='$email' and pass='$encriptada'") 
or die ("Error de login");

//Contamos los registros que genera esa consulta
$cantidad=mysqli_num_rows($registro);

//inicio administrador
if($cantidad == 1){
	mysqli_close($conexion);
	header("location:listado.php?control=4");
	
} 

//De lo contrario, cerramos la conexion y volvemos al login para decir que el usuario no se encuentra 
else{
	mysqli_close($conexion);
	header("location:fLogin.php?control=1");
}
?>