<?php 

require_once 'Persona.php';

	class Afiliado extends Persona{

		private $tipo_sangre;
		private $estatura;
		private $peso;
		private $fecha_nacimiento;

		public function getTipoSangre(){return $this->tipo_sangre;}

		public function getEstatura(){return $this->estatura;}

		public function getPeso(){return $this->peso;}

		public function getFechaNacimiento(){return $this->fecha_nacimiento;}

		public function setTipoSangre($tps){$this->tipo_sangre=$tps;}

		public function setEstatura($est){$this->estatura=$est;}

		public function setPeso($pes){$this->peso=$pes;}

		public function setFechaNacimiento($fcn){$this->fecha_nacimiento=$fcn;}

		public function __construct($tps=null,$est=null,$pes=null,$fcn=null){
		$this->setTipoSangre($tps);
		$this->setEstatura($est);
		$this->setPeso($pes);
		$this->setFechaNacimiento($fcn);
		}

		public function crearAfiliado(){
			$con = new Conexion();

			return $con->enviar("insert into afiliado (id_persona,tipo_sangre,estatura,peso,fecha_nac) values ( (select max(id) from persona),:tipoSangre,:estatura,:peso,:fechaNacimiento)",array('tipoSangre'=>$this->getTipoSangre(),'estatura'=>$this->getTipoSangre(),'peso'=>$this->getPeso(),'fechaNacimiento'=>$this->getFechaNacimiento()));
		}

		public function extraerAfiliado(){
			$con = new Conexion();

			return $con->extraer('select * from persona where persona');
		}

		public function enlazarAsistencia(){
			$con = new Conexion();

			return $con->enviar("insert into asistencia (id_afiliado,asistencia) values ((select max(id) from afiliado),0)");
		}

	}
?>