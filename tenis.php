<?php
	require_once "deporte.php";
	require_once "interface.php";

	class Tenis extends Deporte{

		protected $saque;
		protected $terreno;

		public function __construct($saque,$terreno){ 
			$this->saque = $saque;
			$this->terreno = $terreno;
			
		}

		public function getSaque(){
			return $this->saque;
		}

		public function setPosicion($saque){
			$this->saque = $saque;
		}

		public function getTerreno(){
			return $this->terreno;
		}

		public function setTerreno($terreno){
			$this->terreno = $terreno;
		}

		public function lesionado(){
			echo "<br> El jugador esta lesionado";
		}

		public function enforma(){
			echo "<br> El jugador esta en plena forma";
		}
		
	}



?>