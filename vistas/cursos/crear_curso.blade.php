<?php !isset($system)? header('Location:../../'):0;?>
<title>Crear Cursos</title>
<script src="scripts/crear_curso.js"></script>
</head>

<body>
	{{Crear::comun('navbar')}}
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				{{Crear::alerta('c',[1=>['Curso creado correctamente'=>'success']])}}
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-4">
				
<form method="post" action=".">
				<select class="form-control" name="profesor">

					@forelse($prof as $clave => $valor)
						<option value="{{$valor['id']}}">{{$valor['nombres']}} {{$valor['apellidos']}} </option>
					@empty
						<option disabled">No se encontraron resultados</option>

					@endforelse
				</select>
			</div>

			<div class="col-md-4">
				<select id="departamento" class="form-control item" name="departamento">
						<option value="-1" selected>Departamento</option>
						@forelse($deps as $clave => $valor)
							<option @if( isset($dep_select) && ($dep_select == $valor['id']) ) {{'selected'}} @endif value="{{$valor['id']}}">{{$valor['nombre']}}</option>
						@empty
						
							<option disabled">No se encontraron resultados</option>

						@endforelse
				</select>
			</div>

			<div class="col-md-4">
				<select id="trayecto" class="form-control item" >
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
				<table class="table table-hover table-striped text-center">
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
								<tr class="bg-light">
									<td>{{$valor['id']}}</td>
									<td>{{$valor['nombres']}}</td>
									<td>{{$valor['apellidos']}}</td>
									<td>{{$valor['cedula']}}</td>
									<td>{{$valor['sexo']}}</td>
									<td>{{$valor['departamento']}}</td>
									<td>{{$valor['trayecto']}}</td>
									<td><input class="est" type="checkbox" name="est[]" value="{{$valor['id']}}"></td>
								</tr>
							@endforeach
					</tbody>
				</table>
				
				@if((isset($_GET['departamento'])) && ($_GET['departamento']!=-1))
					<div class="row">
						<div class="col-md-10">
							<center>
								{{Crear::botonEnviar('Crear Curso','cursos','crear_curso_nuevo','crear-curso','col-md-4 offset-md-2 btn btn-primary')}}
							</center>
						</div>
</form>
						<div class="col-md-2">
							<center>
								
								<div class="btn-group-toggle" data-toggle="buttons">
								  <label class="btn btn-success active">
								    <input id="marcar-todos" type="checkbox" autocomplete="off"> <span id="marcar">Marcar</span> Todos
								  </label>
								</div>
							</center>
							
						</div>
					</div>
				@endif

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

