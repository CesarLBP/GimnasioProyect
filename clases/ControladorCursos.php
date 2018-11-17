<?php

	class ControladorCursos{

		public static function estudiantes_sin_curso(){
			$con = new Conexion();
			$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento');

			Accion::cargarPagina('cursos','estudiantes_sin_curso',['cursos'=>$datos1]);
		}

		public static function crear_curso(){
			$con = new Conexion();
			$prof = $con->extraer('SELECT profesor.id, nombres, apellidos FROM persona, profesor WHERE profesor.id_persona = persona.id');


			$deps = $con->extraer('SELECT * FROM departamento');


			$sql = 'SELECT p.id, p.nombres, p.apellidos, p.cedula, p.sexo, e.trayecto, d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento';
			$arr = NULL;
			
			$dep_select = '';

			if((isset($_GET['departamento'])) && ($_GET['departamento']!='-1')){
				
				$dep_select = $_GET['departamento'];
				$sql.= ' AND d.id = :dep_select';
				$arr['dep_select'] = $dep_select;

			}

			$tra_select = '';
			if((isset($_GET['trayecto'])) && ($_GET['trayecto']!='-1')){
					
				$tra_select = $_GET['trayecto'];
				$sql.= ' AND e.trayecto = :tra_select';
				$arr['tra_select'] = $tra_select;
				

			}

			$sql .= ' order by(d.nombre)';
			$ests = $con->extraer($sql,$arr);

			Accion::cargarPagina('cursos','crear_curso',['prof'=>$prof,'deps'=>$deps,'ests'=>$ests,'dep_select'=>$dep_select]);
		}

		public static function cursos_asignados(){
			$con = new Conexion();
			
			
			$datos2 = $con->extraer('SELECT profesor.id as profesor,departamento.nombre as departamento,persona.cedula,persona.sexo,curso.nota FROM persona,departamento,curso,profesor WHERE curso.id_persona=persona.id and curso.id_departamento=departamento.id and curso.id_profesor=profesor.id AND persona.id > 1');
			Accion::cargarPagina('cursos','cursos_asignados',['cursos'=>$datos2]);
		}
		public static function asignar_estudiantes(){
			$con = new Conexion();
			
			$datos2 = $con->extraer('SELECT profesor.id as profesor,departamento.nombre as departamento,persona.cedula,persona.sexo,curso.nota FROM persona,departamento,curso,profesor WHERE curso.id_persona=persona.id and curso.id_departamento=departamento.id and curso.id_profesor=profesor.id AND persona.id > 1');

			Accion::cargarPagina('cursos','asignar_estudiantes',['cursos'=>$datos2]);
		}

//$datos3 = $con->extraer('SELECT profesor.id as profesor,departamento.nombre as departamento,estudiante.trayecto FROM persona,departamento,profesor,estudiante WHERE  estudiante.id_persona=persona.id and estudiante.id_departamento=departamento.id and profesor.id_persona=persona.id');
		public static function cursos(){

			$con = new Conexion();


			switch ($_POST['dep']) {
				case 'informatica':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND d.nombre="informatica"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case 'electronica':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND d.nombre="electronica"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case 'electricidad':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND d.nombre="electricidad"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case 'contaduria':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND d.nombre="contaduria"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case 'instrumentacion y control':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND d.nombre="instrumentacion y control"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case 'quimica':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND d.nombre="quimica"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case 'procesos qumicos':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND d.nombre="procesos quimicos"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case 'telecomunicaciones':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND d.nombre="telecomunicaciones"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;
				
				default:
				$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					
					break;
			}

		/*	switch ($_POST['tra']) {
				case '0':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND e.trayecto="0"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case '1':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND e.trayecto="1"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case '2':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND e.trayecto="2	"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case '3':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND e.trayecto="3"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;

				case '4':
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND e.trayecto="4"');

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
					break;
				
				default:
					$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento');

					$profesor = $con->extraer('SELECT persona.nombres, persona.id FROM usuario,persona WHERE usuario.id_persona=persona.id AND permisos="0001"');

						

				Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1,'profesores'=>$profesor]);
					break;
			}
			
*/
		}

		public static function consultap1(){

			$con = new Conexion();

			$datos4 = $con->extraer('SELECT departamento.nombre as departamento,estudiante.trayecto FROM departamento,estudiante WHERE estudiante.id_departamento=departamento.id');

			$datos5 = $con->extraer('SELECT persona.nombres,persona.apellidos,persona.cedula,curso.nota FROM persona,curso WHERE curso.id_persona=persona.id');
			
			Accion::cargarPagina('cursos','consultap1',['cursos'=>$datos4]);
			Accion::cargarPagina('cursos','consultap2',['cursos'=>$datos5]);
			
		}
		
		public static function consultar_cursos(){

			$con = new Conexion();
			$datos3 = $con->extraer('SELECT profesor.id as profesor,departamento.nombre as departamento,estudiante.trayecto FROM persona,departamento,profesor,estudiante WHERE  estudiante.id_persona=persona.id and estudiante.id_departamento=departamento.id and profesor.id_persona=persona.id AND persona.id > 1');
			
			Accion::cargarPagina('cursos','consultar_cursos',['cursos'=>$datos3]);
			
		}

	}
?>