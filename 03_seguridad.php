<?php 
	/*echo "string";
	echo "seguridad";
	echo md5("seguridad");*/
	$variable = "seguridad";
	$variable2 = "1234";

	$variableEncriptada = md5("seguridad");
	$variableEncriptada2 = md5("1234");

	echo $variable ."<br>";
	echo $variableEncriptada ."<br>";

	$variableControl ="seguridad1";
	$variableControlEncriptada= md5($variableControl);

	if ($variableEncriptada==$variableEncriptada) {
		# code...
		echo "Son iguales";
	}
	else{
		echo "Son diferentes";
	}

 ?>