<?php

	use PHPUnit\Framework\Testcase;
	include "../clases/deporte.php";


	final class deporteTest extends Testcase{

		public function testLesion(){

					$player= new Futbol("2", "Mbappe", "21" , "Frances", false, "Delantero","Cesped");

				$object=$player->getLesionado();
				$expected=false;
				$this->assertEquals($expected, $object);

		}

		/* public function testFisico(){


				$player= new Deporte("1", "Messi", "32", "Argentina", false);
				$player->fisico();

				$object=$player->setLesionado();
				$expected=false;
				$this->assertEquals($expected, $object);

		}*/
	}

?>