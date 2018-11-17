<?php

	class ControladorEstudiantes{

		public static function estudiantes(){

			$con = new Conexion();

			$datos = $con->extraer('SELECT p.nombres, p.apellidos, p.cedula, p.sexo, d.nombre as departamento, e.trayecto FROM persona as p, estudiante as e, departamento as d WHERE p.id = e.id_persona and e.id_departamento = d.id');

			Accion::cargarPagina('estudiantes','estudiantes',['estudiantes'=>$datos]);
		}


		public static function registrarEstudiante(){
			
			$Persona = new Persona($_POST['nombres'],$_POST['apellidos'],$_POST['cedula'],$_POST['sexo']);

			$Estudiante = new Estudiante($_POST['departamento'],$_POST['trayecto']);
			
			if (($Persona->crearPersona())&&($Estudiante->crearEstudiantes())){
				echo '<script>alert("Estudiante registrado")</script>';
			}else{
				echo '<script>alert("Estudiante no registrado")</script>';
			}

		}

		public function extraerEstudiantes(){

			$con = new Conexion();
			return $con->extraer('select * from usuario');			

		}

	}
?>