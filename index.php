<?php
	require_once "../clases/deporte.php";
	require_once "../clases/futbol.php";
	require_once "../clases/tenis.php";
	require_once "../clases/interface.php";

	$futbol1= new Futbol("2", "Mbappe", "21" , "Frances", "Delantero","Cesped",false);

	$futbol1->mostrar();
	//$futbol1->fisico();


	
?>