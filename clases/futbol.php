<?php
	require_once "deporte.php";
	require_once "interface.php";

	class Futbol extends Deporte {

		protected $posicion;
		protected $tipo;

		public function __construct($numero,$nombre, $edad, $nacionalidad, $lesionado, $posicion, $tipo){ 
			parent::__construct($numero,$nombre, $edad, $nacionalidad, $lesionado);
			$this->posicion = $posicion;
			$this->tipo = $tipo;
			
		}

		public function getPosicion(){
			return $this->posicion;
		}

		public function setPosicion($posicion){
			$this->posicion = $posicion;
		}

		public function getTipo(){
			return $this->tipo;
		}

		public function setTipo($tipo){
			$this->tipo = $tipo;
		}

		public function lesionado(){
			echo "<br> El jugador esta lesionado";
		}

		public function enforma(){
			echo "<br> El jugador esta en plena forma";
		}

		

	}



?>