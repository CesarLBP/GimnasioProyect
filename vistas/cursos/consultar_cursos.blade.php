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

	</div>
</center>

			 
</div>

			<div class="container-fluid">
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">

				<table style="text-align:center" class="table table-hover table-dark col-md-12">
					<thead>
						
						<tr>
							<th>Profesor</th>
							<th>Departamento</th>
							<th>Trayecto</th>
							<th>Seccion</th>
						</tr>

					</thead>

					<?php 

					foreach($cursos as $clave => $valor){

						echo '<tr>';

						echo '<th>';
						echo $valor['profesor'];
						echo '</th>';

						echo '<th>';
						echo $valor['departamento'];
						echo '</th>';

						echo '<th>';
						echo $valor['trayecto'];
						echo '</th>';

						echo '<th>';
						echo '1';
						echo '</th>';

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

