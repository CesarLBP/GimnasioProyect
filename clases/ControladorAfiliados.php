<?php

	class ControladorAfiliados{

		public static function afiliados(){

			$con = new Conexion();

			$datos1 = $con->extraer('SELECT persona.nombres,persona.apellidos,persona.cedula,afiliado.tipo_sangre,persona.sexo,afiliado.estatura,afiliado.peso,afiliado.fecha_nac,asistencia.asistencia FROM persona,afiliado,asistencia WHERE afiliado.id_persona=persona.id AND asistencia.id_afiliado=afiliado.id AND persona.id > 1');

			Accion::cargarPagina('afiliados','afiliados',['afiliados'=>$datos1]);
	//		Accion::cargarPagina('afiliados','consulta',['afiliados'=>$datos1]);
	//		Accion::cargarPagina('afiliados','consulta1',['afiliados'=>$datos1]);
	//		Accion::cargarPagina('afiliados','consulta3',['afiliados'=>$datos1]);
	//		Accion::cargarPagina('afiliados','consulta2',['afiliados'=>$datos1]);
		}

		public static function registrarAfiliado(){

			$Persona = new Persona($_POST['nombres'],$_POST['apellidos'],$_POST['cedula'],$_POST['sexo']);

			$Afiliado = new Afiliado($_POST['sangre'],$_POST['estatura'],$_POST['peso'],$_POST['fecha']);
			
			if (($Persona->crearPersona())&&($Afiliado->crearAfiliado())&&($Afiliado->enlazarAsistencia())){
				echo '<script>alert("Afiliado registrado")</script>';
			}else{
				var_dump($Afiliado);
				echo '<script>alert("Afiliado no registrado")</script>';
			}

		}

		public static function asistenciaAfiliado(){
			
			$Afiliado = New Afiliado ($_POST['asistencia']);

		}

		public static function consulta_diaria(){

			$con = new Conexion();

			$datos1 = $con->extraer('SELECT persona.nombres,persona.apellidos,persona.cedula,afiliado.tipo_sangre,persona.sexo,afiliado.estatura,afiliado.peso,afiliado.fecha_nac,asistencia.asistencia FROM persona,afiliado,asistencia WHERE afiliado.id_persona=persona.id AND asistencia.id_afiliado=afiliado.id AND persona.id > 1');

				Accion::cargarPagina('afiliados','consulta_diaria',['afiliados'=>$datos1]);

		}

		public static function consulta_semanal(){

			$con = new Conexion();

			$datos1 = $con->extraer('SELECT persona.nombres,persona.apellidos,persona.cedula,afiliado.tipo_sangre,persona.sexo,afiliado.estatura,afiliado.peso,afiliado.fecha_nac,asistencia.asistencia FROM persona,afiliado,asistencia WHERE afiliado.id_persona=persona.id AND asistencia.id_afiliado=afiliado.id AND persona.id > 1');

				Accion::cargarPagina('afiliados','consulta_semanal',['afiliados'=>$datos1]);
				
		}

		public static function consulta_mensual(){

			$con = new Conexion();

			$datos1 = $con->extraer('SELECT persona.nombres,persona.apellidos,persona.cedula,afiliado.tipo_sangre,persona.sexo,afiliado.estatura,afiliado.peso,afiliado.fecha_nac,asistencia.asistencia FROM persona,afiliado,asistencia WHERE afiliado.id_persona=persona.id AND asistencia.id_afiliado=afiliado.id AND persona.id > 1');

				Accion::cargarPagina('afiliados','consulta_mensual',['afiliados'=>$datos1]);
				
		}

		public static function consulta_especifica(){

			$con = new Conexion();

			$datos1 = $con->extraer('SELECT persona.nombres,persona.apellidos,persona.cedula,afiliado.tipo_sangre,persona.sexo,afiliado.estatura,afiliado.peso,afiliado.fecha_nac,asistencia.asistencia FROM persona,afiliado,asistencia WHERE afiliado.id_persona=persona.id AND asistencia.id_afiliado=afiliado.id AND persona.id > 1');

				Accion::cargarPagina('afiliados','consulta_especifica',['afiliados'=>$datos1]);
				
		}

	}
?>