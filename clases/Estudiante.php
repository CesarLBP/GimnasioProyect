<?php 

require_once 'Persona.php';

	class Estudiante extends Persona{

		private $departamento;
		private $trayecto;

		public function getDepartamento(){return $this->departamento;}

		public function getTrayecto(){return $this->trayecto;}

		public function setDepartamento($dep){$this->departamento=$dep;}

		public function setTrayecto($tra){$this->trayecto=$tra;}
		
		public function __construct($dep=null,$tra=null){
		$this->setDepartamento($dep);
		$this->setTrayecto($tra);
		}

		public function crearEstudiantes(){
			$con = new Conexion();
			
			return $con->enviar("insert into estudiante (id_persona,id_departamento,trayecto) values ((select max(id) from persona),(select id from departamento where nombre = :Departamento),:trayecto)",array('Departamento'=>$this->getDepartamento(),'trayecto'=>$this->getTrayecto()));
		}

		public function extraerEstudiantes(){
			$con = new Conexion();

			return $con->extraer('select * from persona where persona');
		}

		

	}
?>