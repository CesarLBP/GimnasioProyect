<?php

	class ControladorCursos{

		public static function estudiantes_sin_curso(){

			$con = new Conexion();
			$datos1 = $con->extraer('SELECT p.id,p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento');

			Accion::cargarPagina('cursos','estudiantes_sin_curso',['cursos'=>$datos1]);
		}
<<<<<<< HEAD
//<<<<<<<< HEAD
=======

>>>>>>> e63f92cec78b6f7fcf0aeb0e9b5ab45e2f3deb02
		public static function mis_cursos(){

			Accion::cargarPagina('cursos','mis_cursos');
		}

		public static function consultar_cursos(){

			Accion::cargarPagina('cursos','consultar_cursos');
<<<<<<< HEAD
		}
//=======
		public static function crear_curso_nuevo(){
			
//>>>>>>> 03ae1752043f0078509ecff90a1cc5107baf28c6
=======

		}

		public static function crear_curso_nuevo(){

			//Validar lo que llega mediante post

			if( (isset($_POST['profesor']) && ($_POST['profesor']>0)) && (isset($_POST['departamento']) && ($_POST['departamento']>0)) && (isset($_POST['est']) && (count($_POST['est'])>0))){

				$num_est = count($_POST['est'])-1;
				$con = new Conexion;

				$con->enviar('INSERT INTO curso (id_departamento,id_profesor) values (:id_departamento, :id_profesor)',['id_departamento'=>$_POST['departamento'],'id_profesor'=>$_POST['profesor']]);

				$id_curso = $con->extraer('SELECT max(id) FROM curso');

				$sql = 'INSERT INTO estudiantecurso (id_curso,id_estudiante) values ';

				foreach ($_POST['est'] as $clave => $valor){

					$sql .= '('.$id_curso.',:id_estudiante_'.$clave.')';

					$arr['id_estudiante_'.$clave] = $_POST['est'][$clave];

					if($clave != $num_est){

						$sql .= ',';

					}else{

						$sql .= ';';

					}
				
				}

				if($con->enviar($sql,$arr)){

					redireccionar('cursos','crear_curso_nuevo','');
				}else{

					echo "datos invalidos";
				}

			}
>>>>>>> e63f92cec78b6f7fcf0aeb0e9b5ab45e2f3deb02
		}

		public static function crear_curso(){
			$con = new Conexion();
			$deps = $con->extraer('SELECT * FROM departamento');
			$prof = $con->extraer('SELECT usuario.id, nombres, apellidos FROM persona,usuario WHERE usuario.id_persona=persona.id and persona.id!= 1');
			
			if((isset($_GET['departamento'])) && ($_GET['departamento']!='-1')){
				




				$sql = 'SELECT e.id, p.nombres, p.apellidos, p.cedula, p.sexo, e.trayecto, d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento AND p.id!=1';
				$arr = NULL;
				

					
					$dep_select = $_GET['departamento'];
					$sql.= ' AND d.id = :dep_select';
					$arr['dep_select'] = $dep_select;


				$tra_select = '';
				if((isset($_GET['trayecto'])) && ($_GET['trayecto']!='-1')){
						
					$tra_select = $_GET['trayecto'];
					$sql.= ' AND e.trayecto = :tra_select';
					$arr['tra_select'] = $tra_select;				
				}

				$sql .= ' order by d.nombre, e.trayecto;';
				$ests = $con->extraer($sql,$arr);

				Accion::cargarPagina('cursos','crear_curso',['prof'=>$prof,'deps'=>$deps,'ests'=>$ests,'dep_select'=>$dep_select]);
			}else{
				
				$dep_select = '';
				Accion::cargarPagina('cursos','crear_curso',['prof'=>$prof,'deps'=>$deps,'ests'=>[],'dep_select'=>$dep_select]);
			}
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

		}

		public static function consultap1(){

			$con = new Conexion();

			$datos4 = $con->extraer('SELECT departamento.nombre as departamento,estudiante.trayecto FROM departamento,estudiante WHERE estudiante.id_departamento=departamento.id');

			$datos5 = $con->extraer('SELECT persona.nombres,persona.apellidos,persona.cedula,curso.nota FROM persona,curso WHERE curso.id_persona=persona.id');
			
			Accion::cargarPagina('cursos','consultap1',['cursos'=>$datos4]);
			Accion::cargarPagina('cursos','consultap2',['cursos'=>$datos5]);
			
		}
/*		
		public static function consultar_cursos(){

			$con = new Conexion();
			$datos3 = $con->extraer('SELECT profesor.id as profesor,departamento.nombre as departamento,estudiante.trayecto FROM persona,departamento,profesor,estudiante WHERE  estudiante.id_persona=persona.id and estudiante.id_departamento=departamento.id and profesor.id_persona=persona.id AND persona.id > 1');
			
			Accion::cargarPagina('cursos','consultar_cursos',['cursos'=>$datos3]);
			
		}
*/
	}


?>