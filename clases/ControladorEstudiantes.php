<?php

	class ControladorEstudiantes{

		public static function estudiantes(){

			$con = new Conexion();

			$datos = $con->extraer('SELECT p.nombres, p.apellidos, p.cedula, p.sexo, d.nombre as departamento, e.trayecto FROM persona as p, estudiante as e, departamento as d WHERE p.id = e.id_persona and e.id_departamento = d.id');

			Accion::cargarPagina('estudiantes','estudiantes',['estudiantes'=>$datos]);
		}


		public static function registrarEstudiante(){

			
			$Usuario = new Usuario($_POST['usuario'],$_POST['contrasena'],$_POST['permisos'],1);

			$Persona = new Persona($_POST['nombres'],$_POST['apellidos'],$_POST['cedula'],$_POST['sexo']);

			unset($_POST);
			
			if (($Usuario->crearUsuario())&&($Persona->crearPersona())){
				echo '<script>alert("Usuario creado")</script>';
			}else{
				echo '<script>alert("Usuario no creado")</script>';
			}
			self::usuarios();

		}

		public function extraerUsuarios(){

			$con = new Conexion();
			return $con->extraer('select * from usuario');			

		}

	}
?>