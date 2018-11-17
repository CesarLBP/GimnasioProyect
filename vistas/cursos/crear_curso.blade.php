<?php !isset($system)? header('Location:../../'):0;?>
<title>Crear Cursos</title>
<script src="scripts/crear_curso.js"></script>
</head>

<body>
	{{Crear::comun('navbar')}}
	<div class="container">
		<div class="row justify-content-center">
			CREAR CURSOS
		</div>
		<div class="row justify-content-center">
			<div class="col-md-4">
				
				<select class="form-control">

					@forelse($prof as $clave => $valor)
						<option values="{{$valor[id]}}">{{$valor['nombres']}} {{$valor['apellidos']}} </option>
					@empty
						<option disabled">No se encontraron resultados</option>

					@endforelse
				</select>
			</div>

			<div class="col-md-4">
				<select id="departamento" class="form-control item">
						<option value="-1" selected>Departamento</option>
						@forelse($deps as $clave => $valor)
							<option @if($dep_select == $valor['id']) {{'selected'}} @endif value="{{$valor['id']}}">{{$valor['nombre']}}</option>
						@empty
						
							<option disabled">No se encontraron resultados</option>

						@endforelse
				</select>
			</div>

			<div class="col-md-4">
				<select id="trayecto" class="form-control item">
						<option value="-1" selected>Trayecto</option>
						@for($i = 0; $i<5; $i++)
							<option value="{{$i}}" @if((isset($_GET['trayecto'])) && ($i == $_GET['trayecto'])) {{'selected'}} @endif>{{$i}}</option>
						
						@endfor
						
						
				</select>
			</div>

		</div>
		<br>
		<div class="row justify-content-center">
			
			<div class="col-md-12">
				<table class="table table-striped text-center">
					<thead class="thead-dark">
						<tr>
							<th>id</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Cédula</th>
							<th>Sexo</th>
							<th>Departamento</th>
							<th>Trayecto</th>
							<th>Seleccionar</th>

						</tr>
					</thead>
					<tbody>
						@if($ests !== 0)
							@foreach($ests as $clave => $valor)
								<tr>
									<td>{{$valor['id']}}</td>
									<td>{{$valor['nombres']}}</td>
									<td>{{$valor['apellidos']}}</td>
									<td>{{$valor['cedula']}}</td>
									<td>{{$valor['sexo']}}</td>
									<td>{{$valor['departamento']}}</td>
									<td>{{$valor['trayecto']}}</td>
									<td><input type="checkbox" name="est[{{$valor['id']}}]"></td>
								</tr>
							@endforeach
					</tbody>
				</table>
				
				<div class="row">
					<div class="col-md-10">
						<center>
							
							<button class="col-md-4 offset-md-2 btn btn-primary">Crear Curso</button>
						</center>
						
					</div>
					<div class="col-md-2">
						<center>
							
							<button class="btn btn-success">Chequear Todos</button>
						</center>
						
					</div>
				</div>

						@else
							<tr>
								<td colspan="8">
									No se encontraron estudiantes
								</td>
							</tr>
					</tbody>
				</table>
						@endif
			</div>		
		</div>
	</div>
</body>
</html>

