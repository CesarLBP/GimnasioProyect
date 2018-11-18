<div class="dropdown">

  	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownNavBar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Funciones::PGSC('usuario')}}
  	</button>

	<div class="dropdown-menu" aria-labelledby="dropdownNavBar">
		
		<a align="center" class="dropdown-item" href="./?mod=principal/principal">Principal</a>

		@if((Funciones::PGSC('permisos')[0]=='1') or (Funciones::PGSC('permisos')[1]=='1'))
		<a align="center" class="dropdown-item" href="./?mod=login/usuarios">Usuarios</a>
		@endif
	
		@if((Funciones::PGSC('permisos')[0]=='1') or (Funciones::PGSC('permisos')[1]=='1'))
		<a align="center" class="dropdown-item" href="./?mod=estudiantes/estudiantes">Estudiantes</a>
		@endif

		@if((Funciones::PGSC('permisos')[0]=='1') or (Funciones::PGSC('permisos')[1]=='1') or (Funciones::PGSC('permisos')[2]=='1'))
		<a align="center" class="dropdown-item" href="./?mod=afiliados/afiliados">Afiliados</a>
		@endif

		@if((Funciones::PGSC('permisos')[0]=='1') or (Funciones::PGSC('permisos')[1]=='1') or (Funciones::PGSC('permisos')[2]=='1') or (Funciones::PGSC('permisos')[3]=='1'))
		<a align="center" class="dropdown-item" href="./?mod=cursos/crear_curso">Cursos</a>
		@endif

		@if(Funciones::PGSC('permisos')[3]=='1')
		<a align="center" class="dropdown-item" href="./?mod=cursos/consultap1">Mis Cursos</a>
		@endif
	
		<a align="center" class="dropdown-item" href="./?mod=login/cerrarSesion">Cerrar Sesión</a>

	</div>

</div>