<?php

	class ControladorCursos{

		public static function cursos(){

			$con = new Conexion();

			$datos1 = $con->extraer('SELECT p.nombres,p.apellidos,p.cedula,p.sexo,d.nombre as departamento FROM persona as p,estudiante as e,departamento as d WHERE p.id=e.id_persona AND d.id=e.id_departamento');

			$datos2 = $con->extraer('SELECT profesor.id as profesor,departamento.nombre as departamento,persona.cedula,persona.sexo,curso.nota FROM persona,departamento,curso,profesor WHERE curso.id_persona=persona.id and curso.id_departamento=departamento.id and curso.id_profesor=profesor.id');

			$datos3 = $con->extraer('SELECT profesor.id as profesor,departamento.nombre as departamento,estudiante.trayecto FROM persona,departamento,profesor,estudiante WHERE  estudiante.id_persona=persona.id and estudiante.id_departamento=departamento.id and profesor.id_persona=persona.id
');

			Accion::cargarPagina('cursos','cursos',['cursos'=>$datos1]);
			Accion::cargarPagina('cursos','consulta1',['cursos'=>$datos3]);
			Accion::cargarPagina('cursos','consulta2',['cursos'=>$datos2]);
			Accion::cargarPagina('cursos','consulta3',['cursos'=>$datos2]);

		}


		public static function consultap1(){

			$con = new Conexion();

			$datos4 = $con->extraer('SELECT departamento.nombre as departamento,estudiante.trayecto
FROM departamento,estudiante
WHERE 
estudiante.id_departamento=departamento.id
');

			$datos5 = $con->extraer('SELECT persona.nombres,persona.apellidos,persona.cedula,curso.nota
FROM persona,curso
WHERE 
curso.id_persona=persona.id
');





			Accion::cargarPagina('cursos','consultap1',['cursos'=>$datos4]);
			Accion::cargarPagina('cursos','consultap2',['cursos'=>$datos5]);
			

		}
	}
?>