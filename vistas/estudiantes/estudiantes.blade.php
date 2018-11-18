<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Estudiantes</title>
<script src="scripts/estudiantes.js"></script>
<link rel="stylesheet" type="text/css" href="estilos/usuarios.css">

</head>

<body>

	{{Crear::comun('navbar')}}

	<div class="container-fluid">

		<div class="row justify-content-center">
			<h5 style="color: white;"> REGISTRO DE ESTUDIANTE </h5>
		</div>	

		<div class="row">

			<div  id="registrarUsuario" class="col-md-5">
				
				<div class="col-md-10 offset-md-2 card" style="padding:0;">
					<div class="card-header">
						<h5 id="titulo" align="center"><strong>Inscribir Estudiante</strong></h5>	
						<center>
							<span style="color:red">Todos los datos son requeridos
							</span>

						</center>
					</div>
					
						<div class="card-body">
						
					

							<input id="nombres" class="form-control" type="text" name="nombres" placeholder="Nombres">

							<input id="apellidos" class="form-control" type="text" name="apellidos" placeholder="Apellidos">

							<input id="cedula" class="soloNumeros form-control limitarLargo" type="text" name="cedula" placeholder="Cédula">

							<select id="sexo" class="form-control">
								<option value="0">Sexo</option>
								<option value="M">M</option>
								<option value="F">F</option>
							</select>

							<select id="departamento" class="form-control">
								<option value="0">Departamento</option>
								<option value="Informatica">Informatica</option>
								<option value="Electronica">Electronica</option>
								<option value="Electricidad">Electricidad</option>
								<option value="Contaduria">Contaduria</option>
								<option value="Instrumentacion y Control>Instrumentacion y Control</option>
								<option value="">Instrumentacion y Control</option>
							</select>

							<select id="trayecto" class="form-control">
								<option value="">Trayecto</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>

						
							<input hidden name="prov" value="reg">	
						</div>
					<div class="card-footer">


						{{Crear::code()}}

						{{Crear::botonEnviarAjax('Registrar','Estudiantes','registrarEstudiante','registrar','btn btn-dark offset-4 col-4')}}
						
						
					</div>
		
				</div>
			</div>

			<div id="consultarUsuario" class="col-md-5 offset-md-1">
				
				<table style="text-align:center" class="table table-hover table-dark col-md-12">
					<thead>
						
						<tr>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Departamento</th>
						</tr>

					</thead>

					<?php 

					foreach($estudiantes as $clave => $valor){

						echo '<tr>';

						echo '<th>';
						echo $valor['nombres'];
						echo '</th>';

						echo '<th>';
						echo $valor['apellidos'];
						echo '</th>';

						echo '<th>';
						echo $valor['departamento'];
						echo '</th>';

						echo '</tr>';
					}


					?>


				</table>		
			</div>



		</div>

		
	</div>
	
</body>
</html>

