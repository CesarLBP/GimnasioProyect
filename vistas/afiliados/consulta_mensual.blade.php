<?php !isset($system)? header('Location:../../'):0;?>
<title>Gestion de Cursos</title>
</head>

<body>

	<?php

		Crear::comun('navbar');

	?>

	<div class="container-fluid">
		<div class="row justify-content-center">
			<h5> CONSULTA MENSUAL </h5>
		</div>
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">
				<div style="margin: 1%;">

<center>
	<form>
			<label for="">Seleccione Mes<input type="date" name=""></label>

			<label><input type="button" name="" value="Consulta"></label>

			<label for=""><input type="radio" name="a">Mujer</label>

			<label for=""><input type="radio" name="a">Hombre</label>

			<select class="">
				<option disabled selected>Departamento</option>
				<option>Informatica</option>
				<option>Electronica</option>
				<option>Electricidad</option>
				<option>Contaduria</option>
				<option>Instrumentacion y Control</option>
			</select>
	</form>

	
</center>
			 
</div>

			<div class="container-fluid">
		<div class="row">
			<div id="consultarUsuario" class="col-md-12">

				<table style="text-align:center" class="table table-hover table-striped col-md-12">
					<thead class="thead-dark">
						
						<tr>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Cedula</th>
							<th>T. Sangre</th>
							<th>Fecha Nac.</th>
						</tr>

					</thead>
				<?php 

					foreach($afiliados as $clave => $valor){

						echo '<tr class="bg-light">';

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
						echo $valor['tipo_sangre'];
						echo '</th>';

						echo '<th>';
						echo $valor['fecha_nac'];
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

