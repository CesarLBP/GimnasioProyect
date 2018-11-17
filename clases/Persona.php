<?php 

	class Persona{

		protected $nombre;
		protected $apellido;
		protected $cedula;
		protected $sexo;

		public function getNombre(){return $this->nombre;}

		public function getApellido(){return $this->apellido;}

		public function getCedula(){return $this->cedula;}

		public function getSexo(){return $this->sexo;}

		private function setNombre($nom){$this->nombre=$nom;}

		public function setApellido($ape){$this->apellido=$ape;}

		public function setCedula($ced){$this->cedula=$ced;}

		private function setSexo($sex){$this->sexo=$sex;}
		
		public function __construct($nom=null,$ape=null,$ced=null,$sex=null){	
			$this->setNombre($nom);
			$this->setApellido($ape);
			$this->setCedula($ced);
			$this->setSexo($sex);
		}

		public function crearPersona(){
			//Funcion que registra un usuario en la base de datos. Devuelve 1 si lo registró, 0 si no lo hizo.
			$con = new Conexion();
			return $con->enviar ( "insert into persona (nombres,apellidos,cedula,sexo) values (:nombres,:apellidos,:cedula,:sexo)",
				array('nombres'=>$this->getNombre(),'apellidos'=>$this->getApellido(),'cedula'=>$this->getCedula(),'sexo'=>$this->getSexo()));

		}

		public function extraerPersona(){
			$con = new Conexion();

			return $con->extraer('select * from persona');


		}
		public function enlazar_usuario($usuario){
			$con = new Conexion();

			return $con->enviar('update usuario set id_persona = (select id from persona where cedula = :cedula) where usuario = :usuario',['cedula'=>$this->getCedula(),'usuario'=>$usuario]);


		}


	}
?>