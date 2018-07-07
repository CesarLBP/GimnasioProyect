<?php


	class ControladorPrincipal{

		public static function principal(){

			Accion::cargarPagina('principal','principal');
		}

		public static function prueba(){
			if(ControladorAjax::verificarCode()){

			$nombre = Funciones::PGSC('varNombre');
			$apellido = Funciones::PGSC('varApellido');

			$cadena = "$nombre $apellido";

			echo $cadena;
			}else{
				header('Location:index.php/?err=403');

			}
		}
	}


?>