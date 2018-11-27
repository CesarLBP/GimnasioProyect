<?php

	
	class Enrutador{

		private static $out = ['mod'=>'login','pag'=>'autenticacion'];
		
		private static $default = ['mod'=>'principal','pag'=>'principal'];


		private static $tipo = [

			/*configurar metodos:
			
			0:Páginas Publicoss (se puede acceder estando o no logeado)
			1:Páginas a los que se puede acceder solo si se esta logeado
			2:Páginas a los que se puede acceder solo si NO se esta logeado

			*/

			/*
			Permisos:
				0: root
				1: Jefe
				2: Suervisor
				3: profesor

			*/

			'principal'=>[
				'principal'=>[1,[0,1,2,3]],
			],
			'login'=>[
				'autenticacion'=>[2],
				'iniciarSesion'=>[0],
				'usuarios'=>[1,[0]],
				'registrar_usuario'=>[1,[0]],
				'eliminar_usuario'=>[1,[0]],
				'modificar_usuario'=>[1,[0]],
				'cerrarSesion'=>[1,[0,1,2,3]]
			],
			'estudiantes'=>[
				'estudiantes'=>[1,[0,1]]
			],
			'afiliados'=>[
				'afiliados'=>[1,[0,1,2]],
				'consulta_diaria'=>[1,[0,1,2]],
				'consulta_semanal'=>[1,[0,1,2]],
				'consulta_mensual'=>[1,[0,1,2]],
				'consulta_especifica'=>[1,[0,1,2]]
			],
			'cursos'=>[
				'cursos'=>[1,[0,1]],
				'estudiantes_sin_curso'=>[1,[0,1]],
				'cursos_asignados'=>[1,[0,1]],
				'asignar_estudiantes'=>[1,[0,1]],
				'consultar_cursos'=>[1,[0,1]],
				'crear_curso'=>[1,[0,1]],
//<<<<<<< HEAD
				'consultar_cursos'=>[1,[0,1]],
//=======
				'crear_curso_nuevo'=>[1,[0,1]],
//>>>>>>> 03ae1752043f0078509ecff90a1cc5107baf28c6
				'modificar_usuario'=>[1,[0,1]],
				'consultap1'=>[1,[0,1,3]],
				'mis_cursos'=>[1,[0,1,3]]
			]


		];
		public static function cargar(){

			if(Funciones::PGSC('petAjax')!==0){
				PeticionesAjax::cargar();
			}else if(isset($_GET['err'])){

				Accion::cargarPaginaError();

			}else{


				$dir = Funciones::PGSC('mod');

		
				if($dir!==0){
			
					$pag=Funciones::obtenerPagina($dir);

					$controlador=Funciones::obtenerModulo($dir);
					$tipoPagina = self::$tipo[$controlador][$pag][0];
					
					$controlador = Funciones::definirControlador($controlador);

					if ($tipoPagina===0){

					$controlador::$pag();

					}else{
						session_start();

						if(Funciones::verificarLogin()){

							if($tipoPagina===1){
								$permisos = Funciones::definirTipoUsuario($_SESSION['permisos']);
								$permisoConsedido = 0;
								$mod=strtolower(substr($controlador,11,strlen($controlador)-10));

								foreach (self::$tipo[$mod][$pag][1] as $clavePaginas => $valorPaginas) {



									foreach ($permisos as $clavePermisos => $valorPermisos) {
										if($valorPaginas==$valorPermisos){
											$permisoConsedido = 1;
											break;
										}
										
									}
								}

							
								if($permisoConsedido){

									$controlador::$pag();
								}else{

									Accion::cargarPaginaError(403);
								}
								

							}else if($tipoPagina===2){

								header('Location:./?mod='.self::$default['mod'].'/'.self::$default['pag']);

							}

						}else{
							if($tipoPagina===1){

							header('Location:./?mod='.self::$out['mod'].'/'.self::$out['pag']);

							}else if($tipoPagina===2){

								$controlador::$pag();
								
							}
						}

					}

					//if(Funciones::PGSC('usuario')===0){
				
						//require_once(self::$default);

				}else{
					session_start();
					if(Funciones::verificarLogin()){

						
						$controlador = Funciones::definirControlador(self::$default['mod']);

						$metodo = self::$default['pag'];

						$controlador::$metodo();

						
					}else{

						$controlador = Funciones::definirControlador(self::$out['mod']);
						
						$metodo = self::$out['pag'];

						$controlador::$metodo();
					}
				
				}
			}


		}

		public static function ajax(){

			echo 'Peticion Ajax';
			
		}


 	}

?>