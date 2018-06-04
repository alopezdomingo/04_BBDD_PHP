<?php 
	//
	//setcookie(nombre, contenido, expiracion, localizacion en el servidor)
	setcookie('idioma', 'ingles', time()+60*6024*365, "/");
	echo "La cookie se ha creado";

	if (isset($_COOKIE['idioma'])) {
		echo $_COOKIE['idioma'];
	}
 ?>