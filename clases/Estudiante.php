<?php 

require_once 'Persona.php';

	class Estudiante extends Persona{

		private $departamento;
		private $trayecto;

		public function getDepartamento(){return $this->departamento;}

		public function getTrayecto(){return $this->trayecto;}

		public function setDepartamento($dep){$this->departamento=$dep;}

		public function setTrayecto($tra){$this->trayecto=$tra;}
		
		public function __construct($nom=null,$ape=null,$ced=null,$sex=null,$dep=null,$tra=null){
		parent::__construct($nom,$ape,$ced,$sex);
		$this->setDepartamento($dep);
		$this->setTrayecto($tra);
		}

		public function extraerPersona(){
			$con = new Conexion();

			return $con->extraer('select * from persona where persona');
		}

		public function enviarPersona(){
			$con = new Conexion();

			return $con->enviarPersona("insert into persona (nombres,apellidos,cedula,sexo) values (:nombre,:apellido,:cedula,:sexo)",array('nombre'=>$this->getNombre(),'apellido'=>$this->getApellido(),''=>$this->getCedula(),'sexo'=>$this->getSexo()));
		}
		

	}
?>