<form method="get">

	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">

					<?php Crear::comun('ddNavBar'); ?>

				</li>
				<?php if(explode('/',Funciones::PGSC('mod'))[0]==='cursos'): ?>

					<li style="margin-left:3%;">
						<div class="dropdown">

						  	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownNavBar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo 'Opciones';?>
						  	</button>

							<div class="dropdown-menu" aria-labelledby="dropdownNavBar">
								
								<a align="center" class="dropdown-item" href="./?mod=cursos/crear_curso">Crear Curso</a>

								<a align="center" class="dropdown-item" href="./?mod=cursos/asignar_estudiantes">Asignar Estudiantes</a>
								
								<a align="center" class="dropdown-item" href="./?mod=cursos/estudiantes_sin_curso">Estudiantes sin curso</a>
								
								<a align="center" class="dropdown-item" href="./?mod=cursos/cursos_asignados">Cursos Asignados</a>

								<a align="center" class="dropdown-item" href="./?mod=cursos/consultar_cursos">Consultar Cursos</a>

							</div>

						</div>
					</li>
				<?php endif; ?>

				<?php if(explode('/',Funciones::PGSC('mod'))[0]==='afiliados'): ?>

					<li style="margin-left:3%;">
						<div class="dropdown">

						  	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownNavBar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo 'Consultas';?>
						  	</button>

							<div class="dropdown-menu" aria-labelledby="dropdownNavBar">
								
								<a align="center" class="dropdown-item" href="./?mod=afiliados/consulta_diaria">Diaria</a>

								<a align="center" class="dropdown-item" href="./?mod=afiliados/consulta_semanal">Semanal</a>
								
								<a align="center" class="dropdown-item" href="./?mod=afiliados/consulta_mensual">Mensual</a>
								
								<a align="center" class="dropdown-item" href="./?mod=afiliados/consulta_especifica">Especifico</a>

								<a align="center" class="dropdown-item" href="./?mod=afiliados/afiliados">Registrar</a>

							</div>

						</div>
					</li>
				<?php endif; ?>
			</ul>


		</div>
	</nav>

</form>