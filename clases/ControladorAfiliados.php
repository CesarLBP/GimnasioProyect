<?php

	class ControladorAfiliados{

		public static function afiliados(){

			$con = new Conexion();

			$datos1 = $con->extraer('SELECT persona.nombres,persona.apellidos,persona.cedula,afiliado.tipo_sangre,persona.sexo,afiliado.estatura,afiliado.peso,afiliado.fecha_nac FROM persona,afiliado WHERE afiliado.id_persona=persona.id');

			Accion::cargarPagina('afiliados','consulta',['afiliados'=>$datos1]);
			Accion::cargarPagina('afiliados','consulta1',['afiliados'=>$datos1]);
			Accion::cargarPagina('afiliados','consulta2',['afiliados'=>$datos1]);
			Accion::cargarPagina('afiliados','consulta3',['afiliados'=>$datos1]);
			Accion::cargarPagina('afiliados','afiliados',['afiliados'=>$datos1]);


		}
	}
?>