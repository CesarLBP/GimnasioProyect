<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Cursos</title>
<script src="scripts/curso.js"></script>
</head>

<body>

	<?php

		Crear::comun('navbar');
		
	?>

	<div class="container-fluid">
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">
				<div style="margin: 1%;">

					<form method="post">

						<center>

							<div>

								<select class="col-2 ">
									<option disabled selected>Profesor</option>	
									
									@forelse($profesores as $clave => $valor)

										<option value="{{$valor['id']}}">

										{{$valor['nombres']}}

										</option>
									@empty
										<option disabled> No disponible </option>
									@endforelse
								</select>

								<select class="col-2">
									<option value="0">Departamento</option>
									<option value="Informatica">Informatica</option>
									<option value="Electronica">Electronica</option>
									<option value="Electricidad">Electricidad</option>
									<option value="Contaduria">Contaduria</option>
									<option value="Instrumentacion">Instrumentacion y Control</option>
								</select>

								<select class="col-2">
									<option disabled selected>Trayecto</option>
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>

								<select class="col-2">
									<option disabled selected>Seccion</option>	
								</select>

	<input type="button" name="" value="Crear Curso" class="btn btn-primary" style="margin: 1%;">	

							</div>
						</center>

		<div style="margin: 1%;">

			<select class="col-2" id="dep" name="dep">
				<option value="0">Departamento</option>
				<option value="informatica">Informatica</option>
				<option value="electronica">Electronica</option>
				<option value="electricidad">Electricidad</option>
				<option value="contaduria">Contaduria</option>
				<option value="instrumentacion y control">Instrumentacion y Control</option>
				<option value="procesos quimicos">Procesos Quimicos</option>
				<option value="mecanica">Mecanica</option>
				<option value="quimica">Quimica</option>
				<option value="construccion civil">Construccion Civil</option>
				<option value="telecomunicaciones">Telecomunicacion</option>
			</select>

			<select class="col-2" id="tra" name="tra">
				<option value='lol'>Trayecto</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>

		</div>

				{{Crear::botonEnviarAjax('Filtrar','Cursos','cursos','enviar','offset-4 btn btn-dark')}}

		</form>
	 
</div>

			<div class="container-fluid">
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">

				<table style="text-align:center" class="table table-hover table-dark col-md-12">
					<thead>
						
						<tr>
							<th>ID</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Cedula</th>
							<th>Sexo</th>
							<th>Departamento</th>
						</tr>

					</thead>

					@if($cursos != 0)
					@foreach($cursos as $clave => $valor)
					

						<tr>

						<th>
						{{$valor['id']}}
						</th>

						<th>
						{{$valor['nombres']}}
						</th>

						<th>
						{{$valor['apellidos']}}
						</th>

						<th>
						{{$valor['cedula']}}
						</th>

						<th>
						{{$valor['sexo']}}
						</th>

						<th>
						{{$valor['departamento']}}
						</th>

						</tr>

					@endforeach
					@else
						<tr>

						<th>
						vacio
						</th>

						<th>
						vacio
						</th>

						<th>
						vacio
						</th>

						<th>
						vacio
						</th>

						<th>
						vacio
						</th>

						<th>
						vacio
						</th>

						</tr>
					@endif
					
				</table>		
			</div>

		</div>

	</div>

			</div>

		</div>

	</div>
		
</body>
</html>