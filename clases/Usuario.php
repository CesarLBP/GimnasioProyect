<?php 

require_once 'Persona.php';

	class Usuario extends Persona{

		private $usuario;
		private $contrasena;
		private $permisos;
		private $estado;

		public function getUsuario(){

			return $this->usuario;}

		public function getContrasena(){

			return $this->contrasena;}

		public function getPermisos(){

			return $this->permisos;}

		public function getEstado(){

			return $this->estado;}

		private function setUsuario($usu){

			$this->usuario=$usu;}

		private function setContrasena($con){

			$this->contrasena=$con;}

		private function setPermisos($per){

			$this->permisos=$per;}		

		private function setEstado($est){

			$this->estado=$est;}		

		public function __construct($usu,$con=null,$per=null,$est=null){
			$this->setUsuario($usu);
			$this->setContrasena($con);
			$this->setPermisos($per);
			$this->setEstado($est);

		}

		////////////////////////////////////////////////////////////////////////

		public function crearUsuario(){
			//Funcion que registra un usuario en la base de datos. Devuelve 1 si lo registró, 0 si no lo hizo.
			$con = new Conexion();
			return $con->enviar ('insert into usuario (usuario,contrasena,permisos,estado) values (:usuario,:contrasena,:permisos,:estado)',
				array('usuario'=>$this->getUsuario(),'contrasena'=>password_hash($this->getContrasena(),PASSWORD_BCRYPT),'permisos'=>$this->getPermisos(),'estado'=>$this->getEstado()));

		}

		public function extraerUsuario(){
			$con = new Conexion();

			return $con->extraer('select * from usuario where usuario = :usuario',array('usuario'=>$this->getUsuario()));


		}
		public function verificarContrasena($con){

			//pasword_verify(); comprueba si un string pertenece a una clave encriptada
			//recibe como parametros la contraseña sin encriptar y luego la contraseña encriptada
			//devuelve true si coinciden, false si no

			return password_verify($this->getContrasena(),$con);

		}


		public function modificarUsuario($usu){
			//$con = new Conexion();
			//return $con->enviar (" Update `usuario` SET usuario.usuario = 'Cesar' WHERE usuario.usuario = :Usuario ",array('usuario'=>$usu));
		}

		public function modificarContraseña($cont){
			
		}

		public function eliminarUsuario($usu){
			$con = new Conexion();
			return $con->enviar (" Update `usuario` SET usuario.estado = 0 WHERE usuario.id = :Usuario ",array('usuario'=>$usu));
		}



	}




?>