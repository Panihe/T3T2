<?php
	require_once "deporte.php";
	require_once "futbol.php";
	require_once "tenis.php";
	require_once "interface.php";

	$futbol1= new Futbol("1","<strong>Messi</strong>", "<strong>32</strong>", "<strong>Argentina</strong>", "<strong>true</strong>");
	/*$futbol1->setNumero("1");
	$futbol1->setNombre("<strong>Messi</strong>");
	$futbol1->setEdad("<strong>32</strong>");
	$futbol1->setNacionalidad("<strong>Argentina</strong>");
	$futbol1->setLesionado("<strong>true</strong>");*/
	$futbol1->mostrar();
	//$futbol1->fisico();

	$futbol2= new Futbol("2","<strong>Mbappe</strong>", "<strong>21</strong>", "<strong>Francia</strong>", "<strong>false</strong>");
	$futbol2->setNumero("2");
	$futbol2->setNombre("<strong>Mbappe</strong>");
	$futbol2->setEdad("<strong>21</strong>");
	$futbol2->setNacionalidad("<strong>Francia</strong>");
	$futbol2->setLesionado("<strong>false</strong>");
	$futbol2->mostrar();
	//$futbol2->fisico();
	
?>