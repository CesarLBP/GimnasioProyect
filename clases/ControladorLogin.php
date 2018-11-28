<?php
	class ControladorLogin{

		public static function autenticacion(){
			Accion::cargarPagina('login','autenticacion');
		}
		public static function eliminar_usuario(){

			if(isset($_POST['usuario'])){
				$con = new Conexion;
				$con->enviar('UPDATE usuario SET estado = 0 where id = :id',array('id'=>$_POST['usuario']));
			}else{

				header('Location:./?mod=login/usuarios&del=0');
			}
			header('Location:./?mod=login/usuarios');
		}
		
		public static function usuarios(){

			$usuarios = self::extraerUsuarios();

			Accion::cargarPagina('login','usuarios',['usuarios'=>$usuarios]);
		}

		public static function cerrarSesion(){

			session_start();	
			session_destroy();
			header('Location:.');

		}

		public static function iniciarSesion(){
			$user[] =Funciones::PGSC('usuario');
			$user[] =Funciones::PGSC('contrasena');
			if((Funciones::validarCampoUsuario($user[0]))&&($user[0]!=="")&&($user[1]!=="") ){

				$usuario = new Usuario($user[0],$user[1]);
				$datos = $usuario->extraerUsuario();

				if($datos!=0){

					if($usuario->verificarContrasena($datos[0]['contrasena'])){


						session_start();
						$_SESSION['id']=$datos[0]['id'];
						$_SESSION['usuario']=$datos[0]['usuario'];
						$_SESSION['contrasena']=$datos[0]['contrasena'];
						$_SESSION['permisos']=$datos[0]['permisos'];
						$_SESSION['estado']=$datos[0]['estado'];


						header('Location:.');


					}else{

						header('Location:./?log=2');
					}
				}else{

					header('Location:./?log=1');
					
				}
			}else{

				header('Location:./?log=0');

			
			}

		}
		public static function registrar_usuario(){

			/*
			hay que hacer las validaciones de la variable $_POST ya que solo se validan con html
			*/


			$Persona = new Persona($_POST['nombres'],$_POST['apellidos'],$_POST['cedula'],$_POST['sexo']);

			$Usuario = new Usuario($_POST['usuario'],$_POST['contrasena'],$_POST['permisos'],1);
		
			if (($Persona->crearPersona()) AND ($Usuario->crearUsuario())){
				if($Persona->enlazar_usuario($Usuario->getUsuario())){
					if ($_POST['permisos']=='0001') {
						$Usuario->enlazar_profesor();
						header('Location:./?mod=login/usuarios&reg=1');
					}
						header('Location:./?mod=login/usuarios&reg=1');
						//Si el usuario es creado correctamente
				}else{
					$con = new Conexion;
					$id_usu = $con->extraer('Select id from usuario where usuario = :usuario',['usuario'=>$Usuario->getUsuario()]);
					$id_per = $con->extraer('Select id from persona where cedula = :cedula',['cedula'=>$Persona->getCedula()]);

					header('Location:./?mod=login/usuarios&reg=2&code=2.'.$id_usu[0]['id'].'.'.$id_per[0]['id']);
					//Usuario y persona creados pero no enlazados
				}

			}else{
				header('Location:./?mod=login/usuarios&reg=0');
				//Usuario o Persona no fueron creados
			}

		}
		
		public function extraerUsuarios(){

			$con = new Conexion();
			return $con->extraer('select usuario.id, usuario.id_persona, usuario.usuario, usuario.permisos, usuario.estado, persona.id, persona.nombres, persona.apellidos, persona.cedula, persona.sexo from usuario, persona where usuario.id_persona = persona.id and usuario.id != 1 order by(usuario.permisos) desc');			

		}

		public function modificar_usuario(){

			/*
			hay que hacer las validaciones de la variable $_POST ya que solo se validan con html
			*/

			$con = new Conexion;

			$sql = 'UPDATE usuario set usuario = :usuario, permisos = :permisos, estado = :estado';
			$arr = ['usuario'=>$_POST['usuario_mod'],
			'permisos'=>$_POST['permisos_mod'],
			'estado'=>$_POST['estado_mod'],
			'id_usuario'=>$_POST['id_mod'],
			'nombres'=>$_POST['nombres_mod'],
			'apellidos'=>$_POST['apellidos_mod'],
			'cedula'=>$_POST['cedula_mod'],
			'id_persona'=>$_POST['id_persona_mod']
			];

			if($_POST['contrasena_mod'] != ''){

				$sql .= ', contrasena = :contrasena';

				$arr['contrasena'] = password_hash($_POST['contrasena_mod'],PASSWORD_BCRYPT);
			}

			$sql.=' where id = :id_usuario;

			UPDATE persona
			set nombres = :nombres, apellidos = :apellidos, cedula = :cedula
			where id = :id_persona;';

			$res = $con -> enviar($sql,
			$arr);
			if($res == 1){
				redireccionar('login','usuarios','upd=1');
			}else{
				redireccionar('login','usuarios','upd=0');
			}
		}

	}

?>