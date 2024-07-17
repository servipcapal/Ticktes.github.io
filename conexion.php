<?php
	
	$mysqli = new mysqli('http://sql10.freesqldatabase.com/', 'sql10720199', 'tmSR3EUTt4', 'korova');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>