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
	
	<label>Profesor: #</label><label>Trayecto: #</label><label>Seccion: #</label><label>Departamento: #</label>

</div>
	<div>
			<input type="button" value="Cambiar Profesor" class="btn btn-primary" style="margin: 1%;">
			<input type="button" value="Retirar" class="btn btn-primary" style="margin: 1%;">
			<input type="button" value="Agregar" class="btn btn-primary" style="margin: 1%;">
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
							<th>Cedula</th>
							<th>Sexo</th>
							<th>Nota</th>
							<th>Seleccione</th>
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
						echo $valor['cedula'];
						echo '</th>';

						echo '<th>';
						echo $valor['sexo'];
						echo '</th>';

						echo "<th>";
						echo $valor['nota'];
						echo "</th>";
						
						echo '<th>';
						echo '<input type="checkbox" name="sel[';
						echo $valor["id"];
						echo ']">';
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

