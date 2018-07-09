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

		public function enviarEstudiantes(){
			$con = new Conexion();

			//return $con->enviar("insert into estudiante (id_persona,id_departamento,trayecto) values ( (select id from persona where cedula = getCedula()) ,(select id from persona where nombre = getDepartamento()) ,getTrayecto   )",array('');
		}

		public function extraerEstudiantes(){
			$con = new Conexion();

			return $con->extraer('select * from persona where persona');
		}

		

	}
?>