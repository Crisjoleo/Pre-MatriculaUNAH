<?php

	class Departamento{

		private $codigoDepartamento;
		private $nombre;

		public function __construct($codigoDepartamento,
					$nombre){
			$this->codigoDepartamento = $codigoDepartamento;
			$this->nombre = $nombre;
		}
		public function getCodigoDepartamento(){
			return $this->codigoDepartamento;
		}
		public function setCodigoDepartamento($codigoDepartamento){
			$this->codigoDepartamento = $codigoDepartamento;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function __toString(){
			return "CodigoDepartamento: " . $this->codigoDepartamento . 
				" Nombre: " . $this->nombre;
		}


     	



	}
?>