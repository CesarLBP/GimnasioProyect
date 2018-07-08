<?php 

require_once 'Persona.php';

	class Afiliado extends Persona{

		private $tipo_sangre;
		private $estatura;
		private $peso;
		private $fecha_nacimiento;

		public function getTipoSangre(){return $this->tipo_sangre;}

		public function getSexo(){return $this->sexo;}

		public function getEstatura(){return $this->estatura;}

		public function getPeso(){return $this->peso;}

		public function getFechaNacimiento(){return $this->fecha_nacimiento;}

		public function setTipoSangre($tps){$this->tipo_sangre=$tps;}

		public function setSexo($sex){$this->sexo=$sex;}

		public function setEstatura($est){$this->estatura=$est;}

		public function setPeso($pes){$this->peso=$pes;}

		public function setFechaNacimiento($fcn){$this->fecha_nacimiento=$fcn;}

		public function __construct($nom=null,$ape=null,$ced=null,$tps=null,$sex=null,$est=null,$pes=null,$fcn=null){
		parent::__construct($nom,$ape,$ced);
		$this->setTipoSangre($tps);
		$this->setSexo($sex);
		$this->setEstatura($est);
		$this->setPeso($pes);
		$this->setFechaNacimiento($fcn);
		}
	}
?>