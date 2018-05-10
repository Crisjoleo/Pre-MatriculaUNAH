<?php
	class Usuario{

		private $codigoUsuario;
		private $contrasena;
		private $codigoRol;

		public function __construct($codigoUsuario,
					$contrasena,
					$codigoRol){
			$this->codigoUsuario = $codigoUsuario;
			$this->contrasena = $contrasena;
			$this->codigoRol = $codigoRol;
		}
		public function getCodigoUsuario(){
			return $this->codigoUsuario;
		}
		public function setCodigoUsuario($codigoUsuario){
			$this->codigoUsuario = $codigoUsuario;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getCodigoRol(){
			return $this->codigoRol;
		}
		public function setCodigoRol($codigoRol){
			$this->codigoRol = $codigoRol;
		}
		public function __toString(){
			return "CodigoUsuario: " . $this->codigoUsuario . 
				" Contrasena: " . $this->contrasena . 
				" CodigoRol: " . $this->codigoRol;
		}





	

   

	}
?>