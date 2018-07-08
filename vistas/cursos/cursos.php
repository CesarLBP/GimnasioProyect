<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Cursos</title>
</head>

<body>

	<?php

		Crear::comun('navbar');

	?>

	<div class="container-fluid">
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">
				<div style="margin: 1%;">

<center>
	<div>
			<select class="col-2 ">
				<option disabled selected>Profesor</option>
				<option>Informatica</option>
				<option>Electronica</option>
				<option>Electricidad</option>
				<option>Contaduria</option>
				<option>Instrumentacion y Control</option>
			</select>

			<select class="col-2">
				<option disabled selected>Departamento</option>
				<option>Informatica</option>
				<option>Electronica</option>
				<option>Electricidad</option>
				<option>Contaduria</option>
				<option>Instrumentacion y Control</option>
			</select>

			<select class="col-2">
				<option disabled selected>Trayecto</option>
				<option>Informatica</option>
				<option>Electronica</option>
				<option>Electricidad</option>
				<option>Contaduria</option>
				<option>Instrumentacion y Control</option>
			</select>

			<select class="col-2">
				<option disabled selected>Seccion</option>
				<option>Informatica</option>
				<option>Electronica</option>
				<option>Electricidad</option>
				<option>Contaduria</option>
				<option>Instrumentacion y Control</option>
			</select>

				<input type="button" name="" value="Crear Curso" class="btn btn-primary" style="margin: 1%;">	

	</div>
</center>


		<div style="margin: 1%;">
			
		<select class="col-2">
				<option disabled selected>Departamento</option>
				<option>Informatica</option>
				<option>Electronica</option>
				<option>Electricidad</option>
				<option>Contaduria</option>
				<option>Instrumentacion y Control</option>
			</select>

			<select class="col-2">
				<option disabled selected>Trayecto</option>
				<option>Informatica</option>
				<option>Electronica</option>
				<option>Electricidad</option>
				<option>Contaduria</option>
				<option>Instrumentacion y Control</option>
			</select>

		</div>


			 
</div>

			<div class="container-fluid">
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">

				<table style="text-align:center" class="table table-hover table-dark col-md-12">
					<thead>
						
						<tr>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Cedula</th>
							<th>Sexo</th>
							<th>Departamento</th>
						</tr>

					</thead>

					<?php 

					foreach($cursos as $clave => $valor){

						echo '<tr>';

						echo '<th>';
						echo $valor['nombres'];
						echo '</th>';

						echo '<th>';
						echo $valor['apellidos'];
						echo '</th>';

						echo '<th>';
						echo $valor['cedula'];
						echo '</th>';

						echo '<th>';
						echo $valor['sexo'];
						echo '</th>';

						echo "<th>";
						echo $valor['departamento'];
						echo "</th>";

						echo '</tr>';
					}


					?>


				</table>		
			</div>



		</div>

		
	</div>



			</div>
		</div>

		
	</div>
		

</body>
</html>

