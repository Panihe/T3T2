<?php
	require_once "index.php";
	require_once "futbol.php";
	require_once "tenis.php";
	require_once "interface.php";

 	class Deporte{
		//propiedades
		protected $nombre;
		protected $edad;
		protected $nacionalidad;
		protected $lesionado = false; 	
		protected $numero;

		public function __construct($numero,$nombre, $edad, $nacionalidad, $lesionado){
			
			$this->numero = $numero;
			$this->nombre = $nombre;
			$this->edad = $edad;
			$this->nacionalidad = $nacionalidad;
			$this->lesionado = $lesionado;
		}

		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			$this->numero = $numero;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}


		public function getEdad(){
			return $this->edad;
		}

		public function setEdad($edad){
			$this->edad = $edad;
		}

		public function getNacionalidad(){
			return $this->nacionalidad;
		}

		public function setNacionalidad($nacionalidad){
			$this->nacionalidad = $nacionalidad;
		}

		public function getLesionado(){
			return $this->lesionado;
		}

		public function setLesionado($lesionado){
			$this->lesionado = $lesionado;
		}

		public function lesion(){
			if ($this->lesionado){
				echo "El jugador ha sido recuperado <br>";

			}else{
				echo "El jugador padece de una lesion <br>";
				$this->lesionado = true; 
			}
		}

		public function fisico(){
			if($this->lesionado){
				$this->lesionado = true;
				echo "Lesionado<br>";
			}else{
				echo "En plena forma fisica (disponible) <br>";
			}
		}

		public function mostrar(){
			echo "Jugador ".$this->numero."<br>Nombre: ".$this->nombre."<br>"."Edad: ".$this->edad."<br>"."Nacionalidad: ".$this->nacionalidad."<br>"."Deporte: "."<br>"."Posicion: "."<br>"."Lesionado: ".$this->lesionado."<br><br>";
		}
			
	}
?>